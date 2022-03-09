<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function comments(){

        return view('admin.comments.comments');
    }
}
