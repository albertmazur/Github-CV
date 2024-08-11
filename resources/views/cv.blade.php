@extends('index')
@section('content')
    <section class="mx-2 2xl:mx-48 print:mx-0">
        <div class="flex justify-end">
            <button id="print" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none print:hidden">{{__("content.cv.print")}}</button>
        </div>
        <div class="flex gap-3 min-w-[485px] 2xl:min-w-[1085px] bg-white border-solid border-2 border-black-100 overflow-x-auto print:visible print:m-0 print:border-0">
        <div class="flex flex-col gap-3 w-1/4 bg-sky-700 rounded-r-md p-5 z-10 print:bg-sky-700 print:h-screen">
            <img src="{{$avatar_url}}" alt="avatar" class="rounded-md object-cover">
            <div class="flex gap-2 items-center">
                <p class="font-bold text-base 2xl:text-xl">{{$name}}</p>
                <a class="2xl:text-xl text-sky-200" href="{{$html_url}}" target="_blank"><svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
            <p class="text-base 2xl:text-xl">{{$location}}</p>
            @if ($blog)
                <a class="text-base 2xl:text-xl text-sky-200" href="{{$blog}}" target="_blank">{{__("content.cv.portfolio")}}</a>
            @endif
            <p>{{$bio}}</p>
        </div>
        <div class="print:bg-sky-700 print:w-1/4 print:top-0 print:left-0 print:fixed print:h-screen print:z-0"></div>
        <div class="w-3/4 p-3">
            <div class="pt-3">
                <h5 class="text-lg 2xl:text-2xl  font-bold">{{__("content.cv.list_languages")}}</h5>
                <div class="flex flex-row justify-center mb-5">
                    @foreach ($languages as $lang => $value)
                        <div class="flex flex-col items-center p-2">
                            <p class="font-bold">{{$lang}}</p><p>{{number_format($value, 2)}}%</p>
                        </div>
                    @endforeach
                </div>
                <h5 class="text-lg 2xl:text-2xl font-bold my-5">{{__("content.cv.list_repo")}} ({{$public_repos}})</h5>
                <div class="grid grid-cols-2">
                    @foreach ($repo as $name => $r)
                        <div class="flex flex-wrap pb-3 pl-5 bg-white">
                            <div class="rounded overflow-hidden shadow-lg w-full break-inside-avoid px-6">
                                <div class=" py-4">
                                  <div class="font-bold text-sm 2xl:text-xl mb-2">{{$name}}</div>
                                  <p class="text-gray-700 text-xs 2xl:text-sm text-wrap truncate h-10 print:h-8">{{$r['description']}}</p>
                                </div>
                                <div class="flex flex-row justify-between">
                                    @if ($r['language'])
                                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-xs 2xl:text-sm font-semibold text-gray-700 mr-2 mb-2">{{$r['language']}}</span>
                                    @endif
                                    <a class="text-xs 2xl:text-sm text-blue-500 hover:text-blue-800 ml-auto" href="{{$r['url']}}" target="_blank">{{__("content.cv.repository")}}</a>
                                </div>
                              </div>
                        </div>
                    @endforeach
                <div>
            </div>
        </div>
    </div>
    </section>
    @vite('resources/js/print.js')
@endsection
