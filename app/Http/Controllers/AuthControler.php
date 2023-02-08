<?php

namespace App\Http\Controllers;

use App\Models\AuthModel;
use Illuminate\Http\Request;

class AuthControler extends Controller
{

  public static function index()
  {

    $data = [
      'page' => 'Login'
    ];
    return view('pages/public/auth/Login', $data);
  }

  public static function processLogin(Request $request)
  {
    $request->validate([
      'username' => 'required|min:3',
      'password' => 'required|min:6'
    ]);

    return $request->input();
  }

  public static function register()
  {

    $data = [
      'page' => 'Register'
    ];
    return view('pages/public/auth/Register', $data);
  }

  public static function processRegister(Request $request)
  {
    $validatedData = $request->validate([
      'email' => ['required', 'min:5', 'unique:user', 'email:dns'],
      'username' => ['required', 'min:3', 'unique:user'],
      'fullname' => ['required', 'min:3'],
      'password' => ['required', 'min:4'],
      'cpassword' => ['required', 'min:4', 'required_with:password', 'same:password']
    ]);

    $insertData = AuthModel::processRegister($request->input());

    if ($insertData) {
      return redirect('/register')->with('success', 'Register BERHASIL.');
    } else {
      return  redirect('/register')->with('fail', 'Register GAGAL.');
    }
  }
}
