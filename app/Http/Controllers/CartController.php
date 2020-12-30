<?php

namespace App\Http\Controllers;
use App\cart;


use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use DB;
use Auth;

class CartController extends Controller
{
	public function addcart(Request $request){

		$create=new cart;
		$userId = Auth::id();
		//dd($userId);
		$create->user_id=$userId;
		$create->product_id=$request->product_id;
		$create->image=$request->image;
		$create->prouct_name=$request->prouct_name;
		$create->price=$request->price;
		
		//dd($create);
		$create->save();

		return redirect('/cart');
	}
	public function cartview() {
		$userId = Auth::id();
		$users = cart::all()->where('user_id' ,$userId);

		return view('frontend/cart',compact('users')); 
	}
	 // public function giohang(){
  //       $content = cart::content();
  //       $total = cart::total();
  //       return view('user.pages.shopping',compact('content','total'));
  //   }
    public function Cartdelete($id) {
		//dd($id);
		DB::delete('delete from cart where id = ?',[$id]);
		
		return redirect('/cart');
	}
}
