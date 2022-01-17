<a href="/">
    <img src="img/box-arrow-left.svg" class="block w-16 h-16 p-2 m-2 rounded-md hover:bg-zinc-900 transition ease-in-out hover:scale-110">
</a>
<a href="/myportfolio" class="{{ request()->is('/myportfolio') ? 'active bg-zinc-900' : '' }} rounded-md block mb-2 hover:bg-zinc-900 transition ease-in-out hover:scale-110">
    <img src="img/person-fill.svg" class=" w-16 h-16 p-2">
</a>
<a href="/myacademy" class="{{ Route::is('/myacademy') ? 'active' : '' }} rounded-md block mb-2 hover:bg-zinc-900 transition ease-in-out hover:scale-110">
    <img src="img/mortarboard-fill.svg" class="w-16 h-16 p-2">
</a>
<a href="/myskill" class="{{ Route::is('/myskill') ? 'active' : '' }} rounded-md block mb-2 hover:bg-zinc-900 transition ease-in-out hover:scale-110">
    <img src="img/diagram-2-fill.svg" class="w-16 h-16 p-2">
</a>
<a href="/myproject" class="{{ Route::is('/myproject') ? 'active' : '' }} rounded-md block mb-2 hover:bg-zinc-900 transition ease-in-out hover:scale-110">
    <img src="img/code-slash.svg" class="w-16 h-16 p-2">
</a>
<a href="/moreinfo" class="{{ Route::is('/moreinfo') ? 'active' : '' }} rounded-md block mb-2 hover:bg-zinc-900 transition ease-in-out hover:scale-110">
    <img src="img/info-lg.svg" class="w-16 h-16 p-2">
</a>