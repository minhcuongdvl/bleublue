<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\product;
use App\Models\category_image;




class DetailController extends Controller{
    public function index(){
       
       
        return view('template-bleu.master.detail');
       
    }
    
    public function detailproduct($id){
       
        $dataproduct = product::select("*")->where('id','=',$id)->get();
        $cateimg = category_image::select("*")->where('product_id','=',$id)->orderBy('id', 'desc')->get();

       return view('template-bleu.master.detail',array('dataproduct' => $dataproduct,'cateimg'=>$cateimg));
       
       
    }
    

}