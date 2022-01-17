<div class="w-full h-full flex flex-row justify-between items-center px-20 py-3">
    @if(Route::is('about'))
    <div>
        <img src="img/logo.svg" class="h-14 brightness-0">
    </div>
    <div class="flex flex-row justify-end items-center h-full">
        <div class="flex-1">
            <a target="blank_" href="http://facebook.com/Misbakhul29"><img src="img/facebook.svg" class="w-10 mx-2 hover:brightness-0 transition ease-in-out hover:scale-110"></a>
        </div>
        <div class="flex-1">
            <a target="blank_" href="https://www.instagram.com/misbakhul29_"><img src="img/instagram.svg" class="w-10 mx-2 hover:brightness-0 transition ease-in-out hover:scale-110"></a>
        </div>
        <div class="flex-1">
            <a target="blank_" href="https://github.com/hazart29"><img src="img/github.svg" class="w-10 mx-2 hover:brightness-0 transition ease-in-out hover:scale-110"></a>
        </div>
    </div>
    @else
    <div>
        <img src="img/logo.svg" class="h-14">
    </div>
    @endif
</div>