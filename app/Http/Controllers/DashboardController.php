<?php

namespace App\Http\Controllers;

use App\Models\HouseRent;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }
    public function add_property()
    {
        return view('admin.pages.add_property');
    }
    public function add_property_submit(Request $request)
    {
        $validator = $request->validate([
            'title' => 'required',
            'catagory' => 'required',
            'amount' => 'required',
            'number' => 'required',
            'rent_month' => 'required',
            'house_location' => 'required',
            'size' => 'required',
            'room' => 'required',
            'bath_room' => 'required',
            'kitchen_room' => 'required',
            'img' => 'required',
            'desc' => 'required',
        ]);


        $img = $request->img;

        $img =  $img->store('/public/img');
        $img=(explode('/',$img))[2];
        $host=$_SERVER['HTTP_HOST'];
        $img="http://".$host."/storage/img/".$img;


        $responce = HouseRent::insert([
            'title' => $request->title,
            'catagory' => $request->catagory,
            'amount' => $request->amount,
            'number' => $request->number,
            'rent_month' => $request->rent_month,
            'house_location' => $request->house_location,
            'size' => $request->size,
            'room' => $request->room,
            'bath_room' => $request->bath_room,
            'kitchen_room' => $request->kitchen_room,
            'img' => $img,
            'desc' => $request->desc,
     
        ]);

        if($responce == 1){
            return redirect()->back()->with('success','Successfully Submited');
        }else{
            return redirect()->back()->with('error','Faild Submited');
        }

    }

}
