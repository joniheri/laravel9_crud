<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControler extends Controller
{
  public static function index()
  {
    $data = [
      'page' => 'Home'
    ];
    return view('pages/public/home', $data);
  }
}
