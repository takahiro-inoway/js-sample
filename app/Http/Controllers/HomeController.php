<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('home/index', compact('users'));
    }

    public function work()
    {
        $users = User::all();
        return view('home/work', compact('users'));
    }

    public function about()
    {
        $users = User::all();
        return view('home/about', compact('users'));
    }
}
