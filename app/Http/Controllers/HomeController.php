<?php

namespace App\Http\Controllers;

use App\Models\HouseRent;
use App\Models\Category;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $rent_house = HouseRent::all();
        $category = Category::all();
        return view('user.home',compact('rent_house','category'));
    }
    public function about(){
        return view('user.about');
    }
    public function contact(){
        return view('user.contact');
    }
}
