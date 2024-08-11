<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsernickGithubRequest;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class CVController extends Controller
{
    private string $url_github_api = 'https://api.github.com/users/';

    public function home():View{
        return view('home');
    }

    public function generate_cv(UsernickGithubRequest $request){
        $validated = $request->validated();
        $data_for_pdf = $this->get_info_with_github($validated['username']);

        if(isset($data_for_pdf['error'])){
            return back()->with(['error' => $data_for_pdf['error']]);
        }

        return view('cv', $data_for_pdf);
    }

    private function get_info_with_github($nicname):array{
        $data_for_pdf = [];
        try{
            $response = Http::withToken(config('app.token_github'))->get($this->url_github_api.$nicname);
            if($response->ok()){
                $dataUser = $response->json();
                $data_for_pdf['name'] = $dataUser['name'] ?? '';
                $data_for_pdf['avatar_url'] = $dataUser['avatar_url'] ?? '';
                $data_for_pdf['html_url'] = $dataUser['html_url'] ?? '';
                $data_for_pdf['bio'] = $dataUser['bio'] ?? '';
                $data_for_pdf['location'] = $dataUser['location'] ?? '';
                $data_for_pdf['blog'] = $dataUser['blog'] ?? '';
                $data_for_pdf['public_repos'] = $dataUser['public_repos'] ?? '';

                $response = Http::withToken(config('app.token_github'))->get($this->url_github_api.$nicname.'/repos');
                $dataRepos = $response->json();

                $language_sizes = [];
                $repo_list_for_cv = [];
                foreach($dataRepos as $repo){
                    $repo_list_for_cv[$repo['name']]['url'] = $repo['html_url'];
                    $repo_list_for_cv[$repo['name']]['description'] = $repo['description'];
                    $repo_list_for_cv[$repo['name']]['language'] = $repo['language'];

                    if($repo['language'] != null){
                        $language = $repo['language'];
                        $size = $repo['size'];
                        if (isset($language_sizes[$language])) $language_sizes[$language] += $size;
                        else $language_sizes[$language] = $size;
                    }
                }
                $data_for_pdf['repo'] = $repo_list_for_cv;

                $total_size = array_sum($language_sizes);

                $language_percentages = [];
                foreach ($language_sizes as $language => $size) {
                    $language_percentages[$language] = ($size / $total_size) * 100;
                }

                arsort($language_percentages);
                $data_for_pdf['languages'] = $language_percentages;
                return $data_for_pdf;
            }
            elseif($response->forbidden()){
                return ['error' => __('content.error.forbidden_github')];
            }
            else{
                return ['error' => __('content.error.not_found_user')];
            }
        }
        catch(ConnectionException){
            return ['error' => __('content.error.not_connection_github')];
        }
    }
}
