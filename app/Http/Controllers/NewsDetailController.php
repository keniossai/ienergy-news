<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsDetailController extends Controller
{
    public function newsdetails(){
        return view('pages.newsdetails');
    }
}
