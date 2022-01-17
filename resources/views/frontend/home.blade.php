@extends('welcome')
@section('content')
<div class="flex flex-1 flex-col font-sans font-bold pl-10">
    <p class="text-5xl p-1">Hello!!!</p>
    <p class="text-5xl p-1">I'M Misbakhul Munir</p>
    <p class="block bg-blue-500 rounded-md w-fit text-black ml-1 p-1 my-2 text-3xl">Web Programmer</p>
    <p class="block w-1/2 my-5">"life is only once, do it carefully"</p>
    <div class="flex flex-row">
        <a href="/myportfolio">
            <button class="border-solid border-4 rounded-full border-white px-4 py-2 mr-2 hover:bg-white hover:text-black">View Portfolio</button>
        </a>
        <a href="/aboutme">
            <button class="border-solid border-4 rounded-full border-white px-4 py-2 mr-2 hover:bg-blue-500">About Me</button>
        </a>
    </div>
</div>
<div class="w-full flex items-center flex-1 h-full p-2">
    <div class="absolute w-1/2 h-2/3 bg-blue-500 origin-top-right -rotate-12 right-0 -bottom-12"></div>
    <div class="absolute w-2/5 h-2/3 bg-red-500 origin-top-right -rotate-6 right-0 -bottom-12"></div>
    <div class="absolute w-2/6 h-2/3 bg-white origin-top-right -rotate-3 right-0 -bottom-12  transition ease-in-out duration-200 hover:-translate-y-10">
        <img src="img/me2.jpg" class="object-center" />
    </div>
</div>
@stop