<?php
namespace App\Http\Controllers;
use App\StudInsert;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use DB;

class StudInsertController extends Controller
{

	public function insert(){

		return view('admin/stud_create');
	}



	public function create(Request $request){
			//dd($request->all());
		$create=new StudInsert;
		$create->first_name=$request->first_name;
		$create->last_name=$request->last_name;
		$create->city_name=$request->city_name;
		$create->email=$request->email;

		// $imageName = $request->image->getClientOriginalName();
		// $request->image->move(public_path('images'), $imageName);
		//$create->image=$imageName;
		
		$create->save();
		return response()->json(
            [
                'success' => 1,
                'message' => 'Data inserted successfully '
            ]
        );
		//echo json_encode(array("statusCode"=>200));

		//return redirect('admin/create');

	}
	public function destroy($id) {
		//dd($id);
		DB::delete('delete from users where id = ?',[$id]);
		// echo "Record deleted successfully.";
		// echo 'Click Here to go back.';
		return redirect('view-records');
	}
// 	public function destroy($id) {
// 		//dd($id);
//     $user = Users::find($id);

//     $user->delete();

//     return redirect('view-records');

// }



}