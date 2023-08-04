<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;
use Session;
class CustomAuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function registration(){
        return view("auth.registration");
    }

    public function registerUser(Request $request){

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('Success','Your account has been registered');
        }
        else
        {
            return back()->with('Failed','Your account has not been registered');
        }
    }

    public function loginUser(Request $request){
        $user = User::where('email','=',$request->email)->first();

        if($user)
        {
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                $checkRole = User::where('role','=',$request->role)->first();
                

                if($user->role == '0')
                {
                    return view('customerpage');
                }
                elseif($user->role == '1')
                {
                    return view('distrubtorpage');
                }
                else
                {
                    return view('NPC/npcpage');
                    
                }
                
            }
            else
            {
                echo "Password doesn't match";
            }
            
        }
        else
        {
            echo"The email is not registered";
            
        }
    }



}