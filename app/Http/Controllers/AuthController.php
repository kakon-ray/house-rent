<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.pages.register');
    }

    public function signup(Request $request)
    {


        $validator =  Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if ($validator->fails()) {

            return $validator->errors();
        }

        $data = ([
            'name' => $request->name,
            'role' => 'user',
            'email' => $request->email,
            'address' => $request->address,
            'password' => Hash::make($request->password)
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
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin');
        } else {
            return redirect()->route('home');
        }
    }




    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('login');
    }
}
