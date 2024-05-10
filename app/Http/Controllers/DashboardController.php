<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\HouseRent;
use Database\Seeders\HourseRent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }
    public function add_category()
    {
        return view('admin.pages.category.add_category');
    }
    public function edit_category(Request $request)
    {  
        $category_details = Category::where('id', $request->id)->first();
        return view('admin.pages.category.edit_category',compact('category_details'));
    }

    public function manage_category()
    {   
        $category = Category::all();
        return view('admin.pages.category.manage_category',compact('category'));
    }

    public function delete_category(Request $request)
    {
        $response = Category::where('id',$request->id)->delete();

        if($response){
            return redirect()->back()->with('success','Delete Successfully');
        }else{
            return redirect()->back()->with('error','Deleting Faild');
        }
    }

    public function add_category_submit(Request $request)
    {
        $validator = $request->validate([
            'category_name' => 'required',
        ]);

        $slug = Str::slug($request->category_name);

        $already_cateogry = Category::where('category_slug',$slug)->count();

        if($already_cateogry == 1){
            return redirect()->back()->with('error','Already have this category');
        }else{
            $responce = Category::insert([
                'category_name' => $request->category_name,
                'category_slug' => $slug
            ]);

            if($responce == 1){
                return redirect()->back()->with('success','Successfully Submited');
            }else{
                return redirect()->back()->with('error','Faild Submited');
            }
        }
       

     

    }

    public function edit_category_submit(Request $request)
    {
        $validator = $request->validate([
            'category_name' => 'required',
        ]);

             $slug = Str::slug($request->category_name);

             
            $responce = Category::where('id',$request->id)->update([
                'category_name' => $request->category_name,
                'category_slug' => $slug
            ]);

            if($responce == 1){
                return redirect()->back()->with('success','Successfully Update');
            }else{
                return redirect()->back()->with('error','Faild Submited');
            }
 

    }
 

    // this is property part
    public function add_property()
    {   
        $category = Category::all();
        return view('admin.pages.add_property',compact('category'));
    }

    public function edit_property(Request $request)
    {   
        $houserent = HouseRent::where('id', $request->id)->first();
        $category = Category::all();
        return view('admin.pages.edit_property',compact('houserent','category'));
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
            'user_id' => Auth::guard('admin')->user()->id,
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
    public function edit_property_submit(Request $request)
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
            'desc' => 'required',
        ]);


        if($request->img){
            $img = $request->img;

            $img =  $img->store('/public/img');
            $img=(explode('/',$img))[2];
            $host=$_SERVER['HTTP_HOST'];
            $img="http://".$host."/storage/img/".$img;
        }else{
            $img = $request->old_img;
        }
 


        $responce = HouseRent::where('id', $request->id)->update([
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
            return redirect()->back()->with('success','Successfully Update');
        }else{
            return redirect()->back()->with('error','Faild Submited');
        }

    }


    public function manage_property()
    {   
        $all_property = HouseRent::where('user_id',Auth::guard('admin')->user()->id)->get();
        return view('admin.pages.manage_property',compact('all_property'));
    }

    public function delete_property(Request $request)
    {
        $delete_house = HouseRent::where('id',$request->id)->delete();

        if($delete_house){
            return redirect()->back()->with('success','Delete Successfully');
        }else{
            return redirect()->back()->with('error','Deleting Faild');
        }
    }

}
