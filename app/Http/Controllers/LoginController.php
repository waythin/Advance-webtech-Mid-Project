<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seeker;

class LoginController extends Controller
{
    public function login(){
        return view('seeker.login');
    }

    

    public function loginCSubmit(Request $request){
        
        $this->validate($request,
 
        [
            'username'=>'required|min:4|max:10',
            'password'=>'required'
        ],

        [
            'username.required'=>'Userame is requried!',
            'password.required'=>'This field is required!',
           
        ]
        );

      

        $seeker = Seeker::where('username',  $request->username)->where('password',(  $request->password))->first();

        if(!empty($seeker))
        {
            if($request->username==$seeker->username && $request->password==$seeker->password)
            {
                $request->session()->put('user',$seeker->username);
                return redirect()->route('sdash');
                
            }
        }
        else 
        {
            return view('seeker.login')->with('errmsg', 'Username or Password does not exist!');
        }

            // $request->session()->put('user',$seeker->username);
            // return redirect()->route('profile');
       
        
    }


    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
}
