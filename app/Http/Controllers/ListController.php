<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\category;
use App\Models\product;




class ListController extends Controller{
    
    public function index(){
        
        $cat = category::select("*")->orderBy('categories_id', 'asc')->get();
       
        $product = product::select("*")->orderBy('id', 'desc')->get();

        
        
        return view('template-bleu.master.list',array('datacat'=>$cat,'dataproduct' => $product));
       
    }
    
    public function listcatproduct($slug){
        
        $cat = category::select("*")->orderBy('categories_id', 'asc')->get();
        $product = product::select("*")->where('category_product','=',$slug)->orderBy('id', 'desc')->get();
        
        return view('template-bleu.master.list',array('datacat'=>$cat,'dataproduct' => $product));

        
    }

    
    
}