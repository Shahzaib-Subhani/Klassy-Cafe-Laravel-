<?php

namespace App\Http\Controllers;
use App\Models\cart;

use App\Models\chefs;
use App\Models\User;
use App\Models\Food;
use App\Models\reserve;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Admincontroller extends Controller
{
    public function index(){
        $data = user::all();
        return view("admin.users",compact("data"));
    }

    public function deluser($id){
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu(){
       

        $usertype = Auth::user()->usertype;
        if($usertype == "1"){
            $data = Food::all();
            return view('admin.food',compact('data'));}
        else{
         
            return redirect('/redirects');
        }
    }

    public function create(){
        return view('admin.createfood');
    }
    

    public function upload(Request $req){

        
        
        $data = new Food;

        $image = $req->image;

        $imgname = time().'.'. $image->getClientOriginalExtension();
        $req->image->move('foodimage',$imgname);


        $data->image = $imgname;
        $data->title = $req->title;
        $data->price = $req->price;
        $data->description = $req->descrip;

       $data->save();
        return redirect('/foods');
       
    }

    public function del($id){

        $data = Food::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function edit($id){

        $data = Food::find($id);

        return view('admin.update',compact('data'));
    }


    public function update(Request $req, $id){
        $data = Food::find($id);

        

       
        if(!empty($req->image)){
            $image = $req->image;

            $imgname = time().'.'. $image->getClientOriginalExtension();

            $req->image->move('foodimage',$imgname);

            $data->image = $imgname;
        }

      
        
        $data->title = $req->title;
        $data->price = $req->price;
        $data->description = $req->descrip;

       $data->save();
        return redirect("/foods");
    }



    public function reserve(Request $req){

        $data = new reserve;

        
        $data->name = $req->name;
        $data->email = $req->email;
        $data->phone = $req->phone;
        $data->guests = $req->guest;
        $data->date = $req->date;
        $data->time = $req->time;
        $data->message = $req->message;

       $data->save();
        return redirect('/');

    }

    public function watch(){

        

       $usertype = Auth::user()->usertype;
       if($usertype == "1"){
        $data = reserve::all();
        return view("admin.reserve",compact("data"));}
       else{
        
           return redirect('/redirects');
       }
    }


    public function delreserve($id){

        $data = reserve::find($id);

        $data->delete();

       return redirect()->back();
    }

    public function chef(){
        

        $usertype = Auth::user()->usertype;
       if($usertype == "1"){
        $data = chefs::all();

        return view("admin.chef",compact("data"));}
       else{
        
           return redirect('/redirects');
       }

        
    }

    public function Addchef(Request $req){
        $data = new chefs;

    

        $image = $req->image;

        $imgname = time().'.'. $image->getClientOriginalExtension();
        $req->image->move('chefimage',$imgname);


        $data->image = $imgname;
        $data->name = $req->name;
        $data->speciality = $req->speciality;
       

       $data->save();


        return redirect('/chefs');
    }


    public function createchef(){


        return view('admin.addchef');
    }


    public function editchef($id){

        $data = chefs::find($id);

        return view("admin.editchef" ,compact("data"));
    }

    public function updatechef(Request $req, $id){
        $data = chefs::find($id);

        

       
        if(!empty($req->image)){
            $image = $req->image;

            $imgname = time().'.'. $image->getClientOriginalExtension();

            $req->image->move('chefimage',$imgname);

            $data->image = $imgname;
        }

      
        
        $data->name = $req->name;
        $data->speciality = $req->speciality;
        

       $data->save();
        return redirect("/chefs");
    }


    public function deletechef($id){
        $data = chefs::find($id);

        $data->delete();

        return redirect('/chefs');
    }

} 