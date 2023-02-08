<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControler extends Controller
{

  public static function index()
  {

    $data = [
      'page' => 'Data User'
    ];
    return view('pages/public/user/DataUser', $data);
  }
}
