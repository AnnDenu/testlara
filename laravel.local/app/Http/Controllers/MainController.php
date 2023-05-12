<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){

return view('home');

    }
    public function about(){

        return view('about');
        
    } 
        public function reviews(){

         return view('reviews');
            
         }
         
 public function reviews_check(Request $_request){
            $valid = $_request->validate([
                'email' =>  'required|min:4|max:100',
                'subject' =>  'required|min:4|max:100',
                'message' =>  'required|min:15|max:500'
            ]);
         }
         public function login(){
                return view('login');
         }
    public function courses(){
       return view('courses');
    }
    public function lk(){
       return view('lk');
}
public function author(){
   return view('author');
}

}