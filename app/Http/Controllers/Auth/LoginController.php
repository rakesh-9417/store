<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{

    use AuthenticatesUsers;
    protected function authenticated(Request $request, $user)
    {
        // to admin dashboard
        if($user->isAdmin()) {
            //return redirect(route('admin/category'));
            return redirect('/dashboard');
        }

        // to user dashboard
        else {
            //return redirect(route('frontend/estore'));
           return redirect('/');
       }

       abort(404);
   }
   public function __construct()
   {
    $this->middleware('guest')->except('logout');
    }
}
?>