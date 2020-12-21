<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use DB;
use Auth;

class CategoryController extends Controller
{

 public function categorypageview(){
  if( Auth::check() )
  {

    if ( Auth::user()->isAdmin() ) {

     return view('admin/category');
 }
 else  {
    abort(403, 'You dont have access to this page.');

     //return redirect('/');
 }
}


}
public function ArrayTest()
{
$url = url('');
echo $url;


}
public function addcategory(Request $request){

			//dd($request->all());
  $create=new Category;
  $create->category_name=$request->category_name;
  $create->category_desc=$request->category_desc;		
  $imageName = $request->image->getClientOriginalName();
  $request->image->move(public_path('category'), $imageName);
  $create->image=$imageName;
  $create->save();

  return redirect('admin/category');
}
public function selectcategory() {
  $users = DB::select('select * from category');
  return view('admin/product',compact('users'));      
}
}
