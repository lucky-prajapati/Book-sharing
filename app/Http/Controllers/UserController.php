<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\StateWiseCity;

class UserController extends Controller
{
    public function register(Request $request)
    { 
        
        $register = new Register();
        $register->email=$request->email;
        $register->name=$request->name;
        $register->mobno=$request->mobno;
        $register->psw=$request->psw;
        $register->save();
        return view('login');
    }
    public function login(Request $request)
    {
        $uname= $request->uname;
        $psw=$request->psw;
        $user=Register::where('email',$uname)->first();
        session()->put('email',$user->email);
        if($user)
        {
            if($psw=$user->psw)
            {
                
                return view('dashboard');
                return view("home");
            }
            else
            {
                return "login fail";
                
                
            }
        }
        else
        {
            
             return 'Your email not correct,(Please try again)<a href="/login" a>click</a>';
            return view("home");
    
        }
    }
    public function fetch(){
        $data=Register::where('email',session('email'))->get();
        $sate=StateWiseCity::all();
        return view('viewprofile',['datas'=>$data],['state'=>$sate]);
        

    }
    public function fetch1(){
        $data=Register::where('email',session('email'))->get();
        $states=StateWiseCity::select('state')->get();
        $cities=StateWiseCity::select('city')->get();
        return view('updateprofile',['states'=>$states],['cities'=>$cities]);
        

    }
    public function update(Request $request)
    {
        $update = Register::where('email',session('email'))->first();
        $update->email=$request->email;
        $update->name=$request->name;
        $update->mobno=$request->mobno;
        $update->locality=$request->locality;
        //$update->city=$request->city;
        //$update->state=$request->state;
        $update->zip=$request->zip;
        $update->save();
        return view('dashboard');
    }
    
}
