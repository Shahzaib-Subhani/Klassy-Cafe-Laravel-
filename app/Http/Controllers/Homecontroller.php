<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\chefs;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
   public function index(){

       $data = Food::all();
       $chef = chefs::all();
       $user_id = Auth::id();

          $count = cart::where("user_id",$user_id)->count();
       return view('home',compact('data','chef','count'));
   }

   public function admin(){
       $usertype = Auth::user()->usertype;
       if($usertype == "1"){
        $data = Food::all();
        return view('admin.food',compact('data'));}
       else{
        $data = Food::all();
        $chef = chefs::all();

         $user_id = Auth::id();

          $count = cart::where("user_id",$user_id)->count();
           return view('home',compact('data','chef','count'));
       }
   }

   public function cart(Request $req , $id){

    if(Auth::id()){

        $user_id = Auth::id();
        $food_id = $id;
        $quantity = $req->quantity;

        $data = new cart;

        $data->user_id = $user_id;
        $data->food_id = $food_id;
        $data->quantity = $quantity;

        $data->save();

        return redirect('/');
    }

    else{
        return redirect('/login');
    }
   }


   public function showcart($id){
   

          $count = cart::where("user_id",$id)->count();
          $data = cart::with('food')->where('user_id',"=",$id)->get();
        //   $data1 = cart::select("*")->where('user_id',"=",$id);


          return view('cart',compact('count','data'));

   }


   public function delcart($id){
       $data = cart::find($id);

       $data->delete();

       return redirect()->back();
   }
}
