<?php

namespace App\Http\Controllers;
use App\Products;


use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use DB;
use Auth;


class ProductController extends Controller
{
    //
  public function productpageview()
  {
   if( Auth::check() )
   {
    if ( Auth::user()->isAdmin() ) {

     return view('admin/product');
   }


   else  {


     return redirect('/');
   }
 }


}

public function addproduct(Request $request){

 $create=new Products;
 $create->prouct_name=$request->prouct_name;
 $create->prouct_desc=$request->prouct_desc;
 $create->price=$request->price;
 $create->qty=$request->qty;

 $imageName = $request->image->getClientOriginalName();
 $request->image->move(public_path('products'), $imageName);
 $create->image=$imageName;
 $create->save();

 return redirect('admin/product');
}
public function productview() {
  $users = DB::select('select * from cart');
  return view('frontend/cart',compact('users'));      
}


public function allproductview() 
{
  $users = DB::select('select * from products');

  return view('frontend/product_list',compact('users'));      
}
public function productshow($id)
{
  $product = Products::all()->where('id' ,$id);
  $userId = Auth::id();
  //dd($userId);
  return view('frontend/product_deatils',compact('product'));
}     

}
