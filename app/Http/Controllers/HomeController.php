<?php

namespace App\Http\Controllers;

use App\Models\Pizzas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        return view('home');
    }
    function insert(Request $req){
        $valitade=$req->validate([
            'user_name'=>"required",
            'email'=>"required",
            'pizza_name'=>"required",
            'topping'=>"required",
            'sauce'=>"required",
            'price'=>"required"
        ]);
        if ($valitade) {
            $pizza=new Pizzas();
            $pizza->user_name=$req->user_name;
            $pizza->email=$req->email;
            $pizza->pizza_name=$req->pizza_name;
            $pizza->topping=$req->topping;
            $pizza->sauce=$req->sauce;
            $pizza->price=$req->price;
            $pizza->save();

            return back()->with("success","Thnak for your order !");
        } else {
            return back()->withErrors($valitade);
        }
        
    }
}
