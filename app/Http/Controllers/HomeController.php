<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function password()
    {
        return view('profile.password');
    }
    public function updatePassword(Request $request)
    {
        $id=Auth::user()->id;
       $db_pass=Auth::user()->password;
       $old_pass=$request->old_password;
       $new_pass=$request->new_password;
       $confirm_pass=$request->confirm_password;

       if(Hash::check($old_pass, $db_pass)){

        if($new_pass === $confirm_pass){
            User::find($id)->update([
                'password'=>Hash::make($request->new_password)
            ]);
            Auth::logout();
            return redirect()->route('home');
        }else{
            return Redirect()->back();
        }

       }else{
         return Redirect()->back();
       }
    }


}
