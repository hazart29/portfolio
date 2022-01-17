<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class link extends Controller
{
    public function index(){
        $url = 'https://wa.me/08880293005';
        return view('frontend.about', ['url' => $url]);
    }
}
