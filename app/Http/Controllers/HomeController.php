<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\FoodChef;

class HomeController extends Controller
{
   public function index()
   {
    $data = food::all();
    $data2 = foodChef::all();
    return view ('home', compact('data','data2'));
   }

   public function redirects(){

    $data = food::all();

    $usertype = Auth::user()->usertype;

    if ($usertype == '1'){
         return view('admin.adminHome');
    }else{
        return view('home', compact('data'));
    }
   }

}
