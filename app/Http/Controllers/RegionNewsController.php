<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegionNewsController extends Controller
{
    public function region(){

        return view('pages.region');
    }
}
