<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserViewController extends Controller {
   public function index() {
      $users = DB::select('select * from users');
      return view('user_view',['users'=>$users]);
   }
}