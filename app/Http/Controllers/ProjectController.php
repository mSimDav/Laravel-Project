<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Image;
use \DB;

class ProjectController extends Controller
{
    public function index(){
        $image=Image::all();
        return view('welcome',compact('image'));
    }
    
    
     public function login(){
        $title='Login Form';
        return view('login_view')->with('title',$title);
    }
     public function check(Request $request){
       if((($_POST["username"]=="user1")&&($_POST["password"]=="pass1")))
	{
         $request->session()->put('username', $_POST["username"]);
        return redirect('login_success');
        }
        else{
            echo "Wrong input!";
            exit;
        }  
    }
     public function ura(Request $request){
             if($request->session()->has('username')){
                return view('ura')->with('uname',$request->session()->get('username'));
             }
             else{
                 return redirect('/login');
             }
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }   
    
    public function search(Request $request)
    {
        $search_term=$request->get('search');
        $images=Image::where('title', $search_term)-> orwhere('description',$search_term)->get();
        return view('search_result')->with('images',$images);
    }
}
