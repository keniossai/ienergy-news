<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashBoardController extends Controller
{
    public function index(){

        return view('admin.dashboard.index');
    }
    public function calendar(){

        return view('admin.calender.index');
    }
    public function lock(){

        return view('auth.lock');
    }
    public function contact(){

        return view('admin.contact.contact');
    }
}
