<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashBoardController extends Controller
{
    public function dashboard(){

        return view('dashboard');
    }
    public function index(){

        return view('admin.calender.index');
    }
}
