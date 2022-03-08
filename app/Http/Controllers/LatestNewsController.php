<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatestNewsController extends Controller
{
    public function latestnews(){
        return view('pages.latestnews');
    }
}
