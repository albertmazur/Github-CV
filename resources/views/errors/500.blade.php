@extends("index")

@section("content")
<section class="bg-white">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center">
            <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-primary-600 dark:text-primary-500">500</h1>
            <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white">{{__("content.error_page.500.server_error")}}</p>
            <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">{{__("content.error_page.500.server_error_text")}}</p>
        </div>
    </div>
</section>
@endsection
