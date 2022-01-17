@extends('welcome')
@section('content')
<div class="w-full flex flex-1 items-center h-full p-2">
    <div class="w-2/3 h-2/3 bg-white overflow-hidden rounded-full ml-14 transition ease-in-out hover:scale-110">
        <img src="img/me.jpg" class="w-full h-full object-cover object-left-top">
    </div>
</div>
<div class="flex flex-1 flex-col font-sans font-bold pl-10">
    <p class="text-5xl p-1 mb-8">About Me</p>
    <p class="text-2xl p-1">Misbakhul Munir</p>
    <p class="block w-1/2 font-normal mb-5">"life is only once, do it carefully"</p>
    <div class="mb-5">
        <p class="font-normal">Hello, I'm Web Programmer and UI Designer</p>
        <p class="font-normal ">lives in Central Java, Indonesia.</p>
        <p class="font-normal ">I'm trying to make a web that is elegant and interactive</p>
        <p class="font-normal ">provide what users need based on User Experience</p>
        <p class="font-normal ">nice to meet you!.</p>
    </div>
    <div class="flex flex-row">
        <a href="/">
            <button class="border-solid border-4 rounded-full border-black px-4 py-2 mr-2 hover:bg-red-500">Back Home</button>
        </a>
        <a href="{{ $url }}">
            <button class="border-solid border-4 rounded-full border-black px-4 py-2 mr-2 hover:bg-blue-500">Hire Me!</button>
        </a>
    </div>
</div>
@stop