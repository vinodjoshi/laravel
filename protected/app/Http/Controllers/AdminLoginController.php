<?php
namespace App\Http\Controllers;
use App\Models\Admin,App\Models\UserDetails;
use Request,Hash,Auth;

class AdminLoginController extends Controller
{
    public function RegisterAdmin(){
		$data = Request::all();
		if(count($data) > 0){
			$admin = new Admin;
			$admin->name = $data['name'];
			$admin->email = $data['email'];
			$admin->password = Hash::make($data['password']);
			if($admin->save()){
				echo "Admin Registered Successfully";
			}else{
				echo "Something went wrong Please register once again";
			}
		}else{
			return view('auth.register');
		}
	}
	
	public function LoginForm(){
		$data = Request::all();
		
		if(count($data) > 0){
			$admin = Auth::attempt(['email'=>$data['email'],'password'=>$data['password']]);
			if($admin == 1){
				return redirect('admin/listuser');
			}else{
				echo "Please Enter Correct Email Id";
			}
		}else{
			return view('auth.login');
		}
	}
	
	public function listuser(){
		    $data = Request::all();
        $UserDetails =  UserDetails::get();
        
        return view('admin.listuser',['data'=>$UserDetails]);
	}

	public function deleteuser($id){
		$UserDetails =  UserDetails::find($id);
		$UserDetails->delete();

		$data = Request::all();
		$UserDetails =  UserDetails::get();

		return view('admin.listuser',['data'=>$UserDetails]);
	}
}
