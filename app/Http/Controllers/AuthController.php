<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function index()
    {
        return view('admin.pages.register');
    }

    public function signup(Request $req)
    {
        // $req->validate([
        //     'name' => 'required'
        // ]);

        $data = ([
            'name' => $req->name,
            'email' => $req->email,
            'address' => $req->address,
            'password' => Hash::make($req->password)
        ]);

        User::create($data);

        return redirect()->route('login');
    }
    public function login()
    {
        return view('admin.pages.login');
    }

    public function loginCheck(Request $request)
    {
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('admin');
        }else{
            return redirect()->route('home');
            
        }
     
      
        }

     
    

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('login');
    }


}
