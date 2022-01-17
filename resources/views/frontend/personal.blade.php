@extends('portfolio')
@section('content')
<div class="bg-black shadow overflow-hidden font-sans w-full sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-white">
            Personal Information
        </h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-200">
            Misbakhul Munir's personal details.
        </p>
    </div>
    <div class="border-t border-gray-400">
        <dl>
            <div class="bg-zinc-900 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                <dt class="text-sm font-medium text-gray-200">
                    Full name 
                </dt>
                <dd class="text-sm font-medium text-gray-200">
                    : Misbakhul Munir
                </dd>
            </div>
            <div class="bg-zinc-900 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                <dt class="text-sm font-medium text-gray-200">
                    Place & date of birth 
                </dt>
                <dd class="text-sm font-medium text-gray-200">
                    : Kebumen, 29 April 2000
                </dd>
            </div>
            <div class="bg-zinc-900 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                <dt class="text-sm font-medium text-gray-200">
                    Gender 
                </dt>
                <dd class="text-sm font-medium text-gray-200">
                    : Male
                </dd>
            </div>
            <div class="bg-zinc-900 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                <dt class="text-sm font-medium text-gray-200">
                    1st Address 
                </dt>
                <dd class="text-sm font-medium text-gray-200">
                    : RT 01 RW 01, Desa Dukuhrejosari
                </dd>
            </div>
            <div class="bg-zinc-900 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                <dt class="text-sm font-medium text-gray-200">
                    2nd Address 
                </dt>
                <dd class="text-sm font-medium text-gray-200">
                    : Kebumen district - Province of Central Java
                </dd>
            </div>
            <div class="bg-zinc-900 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                <dt class="text-sm font-medium text-gray-200">
                    Profession
                </dt>
                <dd class="text-sm font-medium text-gray-200">
                    : Student
                </dd>
            </div>
            <div class="bg-zinc-900 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                <dt class="text-sm font-medium text-gray-200">
                    Bio
                </dt>
                <dd class="text-sm w-full font-medium text-gray-200">
                    : My name is Misbakhul Munir, i live in Kebumen, Central Java, Indonesia.
                    I'm 7th semester right now at Indonesian Digital Technology University,
                    i majored in informatics, special in web and ui design. 
                </dd>
            </div>
            <div class="bg-zinc-900 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                <dt class="text-sm font-medium text-gray-200">
                    Motto
                </dt>
                <dd class="text-sm font-medium text-gray-200">
                    : "life is only once, do it carefully"
                </dd>
            </div>
        </dl>
        
    </div>
</div>

@stop