<?php
namespace App\Http\Controllers;
use Request,Mail;
use App\Models\UserDetails;


class UserDetailController extends Controller
{
    public function anyIndex(){
        
        return view('user.form');
    }
    
    public function anyAdd(){
        
        $data = Request::all();
        if(count($data) > 0) {
            $UserDetails = new UserDetails;
            $UserDetails->fullname = $data['fullname'];
            $UserDetails->email = $data['email'];
            $UserDetails->order_number = $data['order_number'];
            $UserDetails->product_id = $data['product_id'];
			
            if($UserDetails->save()){
				
				Mail::send('emails.welcome', $data, function ($message) {
					$message->to('vinodjoshi6219@yahoo.com');
					$message->subject('Demo mail');
				});
				
			}
        }
    }
    
    public function anyAdmin(){
        $data = Request::all();
        $UserDetails =  UserDetails::get();
        
        return view('admin.listuser',['data'=>$UserDetails]);
    }
}
