<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Food;


class AdminController extends Controller
{
    public function user(){

        $data = user::all();
        return view("admin.users", compact('data'));
    }

    public function deleteUser($id){

        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodMenu(){

        return view("admin.foodMenu");
    }

    public function uploadFood(Request $request){

        $data = new food;

        $image = $request->image;

        $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->image-move('foodImage' , $imageName);
    }
}

