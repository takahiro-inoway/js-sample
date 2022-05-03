<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class RoomController extends Controller
{
  //
  public function index()
  {
    $users = User::all();
    return view('room/index', compact('users'));

  }
}
