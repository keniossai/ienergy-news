<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function posts(){

        return view('admin.post.posts');
    }
}
