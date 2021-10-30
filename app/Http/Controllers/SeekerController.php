<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seeker;

class SeekerController extends Controller
{
    public function dashboard(){
        return view('seeker.dashboard');
    }

    //sign up!!!
    public function signup(){
        return view('seeker.signup');
    }
    

    public function signupS(Request $request){
        $this->validate($request,
 
        [
            'name'=>'required|min:4|max:15',
            'username'=>'required|min:4|max:10',
            'email'=>'required|email',
            'phone'=>'required|digits:11',
            'gender'=>'required',
            'dob'=>'required',
            'nid'=>'required|digits:10',
            'password'=>'required|min:5|max:15|confirmed',
            'password_confirmation'=>'required'
        ],

        [
            'name.required'=>'Name is requried!',
            'name.min'=>'Name must be more than 4 characters!',
            'name.max'=>'Name must be less than 16 characters!',
            'username.required'=>'Userame is requried!',
            'username.min'=>'Userame must be more than 3 characters!',
            'username.max'=>'Userame must be less than 11 characters!',
            'phone.required'=>'Phone number is requried!',
            'phone.digits'=>'The number is less or more than 11 digits, please enter valid phone number!',
            'email.required'=>'Email is required!',
            'dob.required'=>'Date of birth is required!',
            'nid.required'=>'NID is required!',
            'nid.digits'=>'The number is less or more than 10 digits, please enter valid phone number!',
            'email.email'=>'Please enter valid email address!',
            'gender.required'=>'Gender is requried!',
            'password.required'=>'Password is required!',
            'password.min'=>'Password must be more than 4 characters!',
            'password.max'=>'Password must be less than 16 characters!',
            'password_confirmation.required'=>'This field is required!'
        ]
        );

        $var = new Seeker();
        $var->name = $request->name;
        $var->username = $request->username;
        $var->email = $request->email;
        $var->phone = $request->phone;
        $var->gender = $request->gender;
        $var->dob = $request->dob;
        $var->nid = $request->nid;
        $var->password= $request->password_confirmation;
        $var->save();

        // return 'Registration Successful!';
        return redirect()->route('dashboard');
    }

    // seeker dashboard / profile / edit!!!

    public function seeker_dash(){
        return view('seeker.seekerdash');
    }

    public function profile(){
        $seeker = Seeker::where('username',Session()->get('user'))->first();
       // return($juser->email);
        return view('seeker.profile')->with('seeker', $seeker);
    }

    public function edit_profile(Request $request){
        $username = $request->username;
        $seeker = Seeker::where('username',$username)->first();
        return view('seeker.edit_profile')->with('seeker', $seeker);
    }

    public function edit_profileS(Request $request){
        $this->validate($request,

        [
            'name'=>'required|min:4|max:15',
            'username'=>'required|min:4|max:10',
            'email'=>'required|email',
            'phone'=>'required|digits:11',
            'gender'=>'required',
            'dob'=>'required',
            'nid'=>'required|digits:10',
            'password'=>'required|min:5|max:15|confirmed',
            'password_confirmation'=>'required'
        ],

        [
            'name.required'=>'Name is requried!',
            'name.min'=>'Name must be more than 4 characters!',
            'name.max'=>'Name must be less than 16 characters!',
            'username.required'=>'Userame is requried!',
            'username.min'=>'Userame must be more than 3 characters!',
            'username.max'=>'Userame must be less than 11 characters!',
            'phone.required'=>'Phone number is requried!',
            'phone.digits'=>'The number is less or more than 11 digits, please enter valid phone number!',
            'email.required'=>'Email is required!',
            'dob.required'=>'Date of birth is required!',
            'nid.required'=>'NID is required!',
            'nid.digits'=>'The number is less or more than 10 digits, please enter valid phone number!',
            'email.email'=>'Please enter valid email address!',
            'gender.required'=>'Gender is requried!',
            'password.required'=>'Password is required!',
            'password.min'=>'Password must be more than 4 characters!',
            'password.max'=>'Password must be less than 16 characters!',
            'password_confirmation.required'=>'This field is required!'
        ]
        );
 
        

        $var = Seeker::where('username',$request->username)->first();
        $var->name = $request->name;
        $var->username = $request->username;
        $var->email = $request->email;
        $var->phone = $request->phone;
        $var->gender = $request->gender;
        $var->dob = $request->dob;
        $var->nid = $request->nid;
        $var->password= $request->password_confirmation;
        $var->save();
        

       
         return redirect()->route('profile');
    }

    


   
}
