@extends('index')
@section('content')
@include("alerts.error")
<form action="{{route("generate_cv")}}" method="POST" class="p-5 rounded-md bg-gray-100">
    @csrf
    <div class="space-y-12">
      <div>
        <h2 class="text-base font-semibold leading-7 text-gray-900">{{__("content.home.title")}}</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">{{__("content.home.text_home")}}</p>

        <div class="mt-10">
         <div>
            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">{{__("content.home.username")}}</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" name="username" id="username" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith">
              </div>
              @error('username')
                <p class="text-red-500 text-xs italic">{{$message}}</p>
              @enderror
         </div>
        </div>


    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{__("content.home.generate_cv")}}</button>
    </div>
  </form>
@endsection
