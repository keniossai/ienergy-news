<?php

namespace App\Http\Controllers;

use App\Models\Post;
// use App\Models\Category;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function homepage(){
        $posts = Post::with('category', 'user')->orderBy('created_at', 'DESC')->take(100)->get();
        $firstPosts = $posts->splice(0, 1);
        $lastPosts = $posts->splice(0, 2);
        $mostPosts = $posts->splice(3, 10);
        $popularPosts = $posts->splice(8, 6);
        $trendingPosts = $posts->splice(2, 3);
        $downPosts = $posts->splice(10, 4);

        // return $lastPosts;

        $recentPosts = Post::with('category', 'user')->orderBy('created_at', 'DESC')->paginate(100);
        return view('pages.homepage', compact(['posts', 'recentPosts', 'firstPosts', 'lastPosts', 'mostPosts', 'popularPosts', 'trendingPosts', 'downPosts']));
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
