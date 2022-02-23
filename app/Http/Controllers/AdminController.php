<?php

namespace App\Http\Controllers;

use App\Models\Pizzas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
    function all_pizzas(){
        $pizzas=Pizzas::all();
        return view('admin.allpizza',['pizzas'=>$pizzas]);
    }
    function delete_order($id){
        $delete_order=Pizzas::find($id);
        $delete_order->delete();
        return back()->with("delete","$delete_order->user_name 's Order is deleted");
    }
    function edit_order($id){
        $pizzas=Pizzas::find($id);
        return view('admin.edit',['pizzas'=>$pizzas]);
    }    
    function update_order($id,Request $req){
        $pizzas=Pizzas::find($id);
        $pizzas->user_name=$req->user_name;
        $pizzas->pizza_name=$req->pizza_name;
        $pizzas->topping=$req->topping;
        $pizzas->sauce=$req->sauce;
        $pizzas->price=$req->price;

        $pizzas->update();
        return redirect()->route('pizzas');
    }
}
