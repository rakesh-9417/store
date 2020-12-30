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
  public function productpageview(){
   if( Auth::check() )
   {
            // if user admin take him to his dashboard
    if ( Auth::user()->isAdmin() ) {
                 //return redirect(route('dashboard'));
     return view('admin/product');
   }

            // allow user to proceed with request
   else  {

            	//return view('frontend/estore');
            	//return redirect()->route('/wishlist');
     return redirect('/');
   }
 }

		//return view('admin/product');
}

public function addproduct(Request $request){

     // dd($request->all());

  $create=new Products;
  if($request->hasfile('image'))
  {
    foreach($request->file('image') as $file)
    {
      $name = time().rand(1,100).'.'.$file->extension();
      //$file->move(public_path('products'), $name);  
      $file->move(public_path().'/products/', $name);
      $data[] = $name;  
    }
  }
  //dd($data);
  $create->prouct_name=$request->prouct_name;
  $create->prouct_desc=$request->prouct_desc;
  $create->price=$request->price;
  $create->qty=$request->qty;

  // $file->filenames=json_encode($data);
  // $imageName = $request->image->getClientOriginalName();
 // $request->image->move(public_path('products'), $imageName);
  $create->image=json_encode($data);
 // $create->image=implode(",",$data);
  $create->save();

  return redirect('admin/product');
}
public function productview() {
  $users = DB::select('select * from products');
  return view('frontend/cart',compact('users'));      
}
public function allproductview() {
  
  
  $users = DB::select('select * from products');
  return view('frontend/product_list',compact('users'));      
}
}
