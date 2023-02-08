<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthModel extends Model
{
  use HasFactory;

  public static function processRegister($data)
  {

    $insert = DB::table('user')
      ->insert(
        [
          // 'id'        => Str::uuid(),
          'id'        => Str::random(15),
          'email'     => $data['email'],
          'username'  => $data['username'],
          'password'  => Hash::make($data['password']),
          'fullname'  => $data['fullname'],
        ]
      );

    return $insert;
  }

  public static function processUpdate($data)
  {
  }
}
