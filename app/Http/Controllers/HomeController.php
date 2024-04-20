<?php

namespace App\Http\Controllers;

use App\Models\HouseRent;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $rent_house = HouseRent::all();
        return view('user.home',compact('rent_house'));
    }
    public function about(){
        return view('user.about');
    }
    public function contact(){
        return view('user.contact');
    }
}