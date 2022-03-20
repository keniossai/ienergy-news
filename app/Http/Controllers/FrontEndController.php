<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function homepage(){

        return view('pages.homepage');
    }
    public function about(){

        return view('pages.about');
    }
    public function newsdetails(){

        return view('pages.newsdetails');
    }
    public function latestnews(){

        return view('pages.latestnews');
    }
    public function region(){

        return view('pages.region');
    }
    public function contact(){

        return view('pages.contact');
    }
    public function exclusive(){

        return view('pages.exclusive');
    }
    public function africa(){

        return view('pages.africa');
    }
    public function development(){

        return view('pages.development');
    }
    public function faq(){

        return view('pages.faq');
    }
    public function energyfinance(){

        return view('pages.energyfinance');
    }
}
