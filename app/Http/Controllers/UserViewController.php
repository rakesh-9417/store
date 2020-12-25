<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserViewController extends Controller {
	public function index() {
		//$posts = Blog::all();
		$users = DB::select('select * from student_details');
		return view('user_view',['users'=>$users]);
	}
}

