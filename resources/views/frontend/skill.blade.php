@extends('portfolio')
@section('content')
<div class="bg-black shadow overflow-hidden font-sans w-full sm:mb-4 sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-white">
            Knowledge Information
        </h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-200">
            Misbakhul Munir's Knowledge details.
        </p>
    </div>
    <div class="border-t w-full border-gray-400">
        <div class="bg-zinc-900 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <div class="text-sm font-medium text-gray-200">
                <p class="p-1">HTML</p>
                <div class="w-full bg-white rounded-full">
                    <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-1 leading-none rounded-full" style="width: 85%">85%</div>
                </div>
            </div>
            <dd class="text-sm font-medium text-gray-200">
                <p class="p-1">PHP</p>
                <div class="w-full bg-white rounded-full">
                    <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-1 leading-none rounded-full" style="width: 75%">75%</div>
                </div>
            </dd>
        </div>
        <div class="bg-zinc-900 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-200">
                <p class="p-1">Javascript</p>
                <div class="w-full bg-white rounded-full">
                    <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-1 leading-none rounded-full" style="width: 30%">30%</div>
                </div>
            </dt>
            <dd class="text-sm font-medium text-gray-200">
                <p class="p-1">CSS</p>
                <div class="w-full bg-white rounded-full">
                    <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-1 leading-none rounded-full" style="width: 70%">70%</div>
                </div>
            </dd>
        </div>
        <div class="bg-zinc-900 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-200">
                <p class="p-1">Python</p>
                <div class="w-full bg-white rounded-full">
                    <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-1 leading-none rounded-full" style="width: 45%">45%</div>
                </div>
            </dt>
            <dd class="text-sm font-medium text-gray-200">
                <p class="p-1">MYSQL</p>
                <div class="w-full bg-white rounded-full">
                    <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-1 leading-none rounded-full" style="width: 55%">55%</div>
                </div>
            </dd>
        </div>


    </div>
</div>

@stop