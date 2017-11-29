<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;






class BleuController extends Controller{
    public function index(){
       
       
        return view('template-bleu.master.home');
       
    }
    
   
    

}