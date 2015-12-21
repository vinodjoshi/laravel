<?php
namespace App\Http\Controllers;
use Request,Mail,Session;
use App\Models\Client;


class ClientFrontController extends Controller
{
    public function anyIndex(){
        
        return view('client.frontform');
    }
    
    public function anyAdd(){
        
        $data = Request::all();
        if(count($data) > 0) {
            $UserDetails = new Client;
            $UserDetails->fullname = $data['fullname'];
            $UserDetails->email = $data['email'];
            $UserDetails->order_number = $data['order_number'];
            $UserDetails->product_id = $data['product_id'];
			$UserDetails->note = $data['note'];
			
            if($UserDetails->save()){
                $email = $data['email'];
                $subject = 'Demo mail'; // subject you want for you email
				
				
				Session::flash('flash_message','successfully saved.');
				
				return redirect('/warranty');
			}
        }
    }  
}