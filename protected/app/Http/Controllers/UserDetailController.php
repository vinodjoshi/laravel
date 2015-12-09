<?php
namespace App\Http\Controllers;
use Request,Mail,Session;
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
			$UserDetails->note = $data['note'];
			
            if($UserDetails->save()){
                $email = $data['email'];
                $subject = 'Demo mail'; // subject you want for you email
				Mail::send('emails.welcome', $data, function ($message) use($email, $subject) {
				    $message->from('vinodjoshi6219@gmail.com'); //Your email from you want to  send email 
					$message->to($email);
					$message->subject($subject);
				});
				
				Session::flash('flash_message','successfully saved.');
				
				return redirect('/');
			}
        }
    }
    
   
}
