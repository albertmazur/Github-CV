<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name', 'GithubCV');}}</title>
    <link rel="icon" href="{{asset("storage/iconmonstr-cv-4.svg")}}">
    @vite('resources/css/app.css')

</head>
<body class="bg-gray-50 print:invisible">
    <nav class="bg-white border-gray-200 px-4 2xl:px-6 py-2.5 print:hidden">
        <div class="flex flex-wrap justify-center items-center mx-auto max-w-screen-xl">
            <a href="{{route("home")}}" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap">{{__("content.index.page_home")}}</span>
            </a>
        </div>
    </nav>
    <main class="mx-2 my-16 2xl:mx-40 print:m-0">
        @yield('content')
    </main>
    @vite('resources/js/app.js')
</body>
</html>
