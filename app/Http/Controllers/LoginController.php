<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;
use App\Models\User;
use Auth;


class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginpost(Request $request)
    {
      //  dd($request);
         $this->validate($request,[
        'email'=>'required',
        'password'=>'required',             
    ]);
         $email = $request->input('email');
               $password = $request->input('password');
               $user = User::where('email',$request->input('email'))->first();

               if(!Auth::attempt($request->only(['email','password']))){
          
          return redirect()->back()->with('danger','Username & Password combination doesn\'t not match');

       }
        //  dd(Auth::user()->hasAccess(['admin']));

          if(Auth::user()->hasAccess(['admin'])){
          // dd($request);
          alert()->success('Welcome To Admin Dashboard');
          return redirect()->route('admin-home')->with('success','WELCOME'.Auth::user()->username.'...');
        
        }
        elseif(Auth::user()->hasAccess(['user'])){

                   alert()->success('Welcome To User Dashboard');
                 // dd('owner');
                  return redirect()->route('user-home')->with('success','WELCOME '.Auth::user()->username.'...'); 
                
                }

                else{
         
          return redirect()->back()->with('danger','Something went wrong please try again...');
        } 
        
        } 



        public function logout(Request $request) {
      Auth::logout();
      return redirect()->route('login');
      }

    
}
