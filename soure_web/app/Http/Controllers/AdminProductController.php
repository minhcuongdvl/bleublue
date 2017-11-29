<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\product;
use App\Models\category;
use Illuminate\Support\Facades\Input;
use App\Models\category_image;
use Illuminate\Support\Facades\File;


class AdminProductController extends Controller{
    public function index(){
        
        $product = new product;
        $dataproduct = $product->getData();
        $category = new category();
        $data = $category->getData();
        

        return view('admin-bleu.master.product.admin-product',array('dataproduct' => $dataproduct,'datacategory' => $data));
       
    }
    
    public function addproduct(){
        $category = new category();
        $data = $category->getData();
        return view('admin-bleu.master.product.add-product',array('datacategory' => $data));
       
    }
    public function postproduct(Request $request){
     
          if ($request->hasFile('myfile')) {

        $file = $request->file('myfile');
    

    $destinationPath ='public/bleu-blue/image/';
            $extension =  $file->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            $file->move($destinationPath,$fileName );
          
            

            
          }else{
           
          }
        
        
        
        
        
        $product = new product;
        $product->product_name = $request->product_name;
        $product->product_slug = changeTitle($request->product_name);
        $product->product_price = $request->product_price;      
        $product->product_material = $request->product_material;
        $product->product_size = $request->product_size;
        $product->product_image =    $fileName;    
        // Detail        
        $product->product_sizedetail = $request->product_sizedetail;
        $product->product_maker = $request->product_maker;
        $product->product_origin = $request->product_origin;
        $product->product_handing = $request->product_handing;
        $product->product_manufacturing = $request->product_manufacturing;
        $product->product_srandarbs = $request->product_srandarbs;
        $product->product_derector = $request->product_derector;
        $product->product_statsus = $request->check;
        //
        $product->category_product = $request->category_slug;
        $product->user_id = 0;
        $product->save();
        
        
        $product_id = $product->id;
        
     $destinationPaths ='public/bleu-blue/image-detail/';       

        if(Input::hasFile('imgaedetail')){
            foreach (Input::file('imgaedetail')as $files){
                
                if(isset($files)){
                    $category_img = new category_image();
                    $name = $files->getClientOriginalExtension();
                    $fileName = rand(11111,99999).'.'.$name;
                    $category_img->images = $fileName;
                     $category_img->product_id = $product_id;
                    
                   
                    $files->move($destinationPaths,$fileName);
                   $category_img->save();
                  
                }
            }
          
        }
                  return redirect()->route('listproduct')->with(['flash_level'=>'success','flash_message'=>'Thêm Thành Công']);
}
        
        
        
        
        
    public function deleteproduct($id){
        
       $product = product::find($id);
       $product->delete();
       $product_image = category_image::where('product_id','=',$id)->get()->toArray();
       foreach ($product_image as $value){
           
          File::delete('public/images/'.$value['images']);
       }
        $product_image2 = category_image::where('product_id','=',$id)->delete();
   
       return redirect()->route('listproduct')->with(['flash_level'=>'success','flash_message'=>'Xóa Thành Công']);
    }
    
    
    public function editproduct($id){
     $category = new category();
     $datas = $category->getData();    
    $data = product::findOrFail($id);
    
    return view('admin-bleu.master.product.edit-product', compact('data','id'),array('datacat'=>$datas));

      
    }
    public function posteditproduct(Request $request,$id){
        $product = $request->product_name;
        if($product == null){
        $this->validate($request, 
                ['product_name'=>'required'],
                ['product_name.required'=>'Vui Lòng Nhập Tên Category Muốn thay đổi']
                
                );
        }else{
             if ($request->hasFile('myfile')) {

        $file = $request->file('myfile');
    

    $destinationPath ='public/bleu-blue/image/';
            $extension =  $file->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            $file->move($destinationPath,$fileName );
            $img=$destinationPath.'/'.$fileName;
            

            
          }else{
           
          }
           
            
            
        $product = product::find($id);
        
        
        
        $product->product_name = $request->product_name;
        $product->product_slug = changeTitle($request->product_name);
        $product->product_price = $request->product_price;      
        $product->product_material = $request->product_material;
        $product->product_size = $request->product_size;
        $product->product_image =    $fileName;    
        // Detail        
        $product->product_sizedetail = $request->product_sizedetail;
        $product->product_maker = $request->product_maker;
        $product->product_origin = $request->product_origin;
        $product->product_handing = $request->product_handing;
        $product->product_manufacturing = $request->product_manufacturing;
        $product->product_srandarbs = $request->product_srandarbs;
        $product->product_derector = $request->product_derector;
        $product->product_statsus = $request->check;
        //
        $product->category_product = $request->category_slug;
        $product->user_id = 0;
        $product->save();
        $product_image2 = category_image::where('product_id','=',$id)->delete();
        $product_id = $product->id;
        
        $destinationPaths ='public/bleu-blue/image-detail/';       

        if(Input::hasFile('imgaedetail')){
            foreach (Input::file('imgaedetail')as $files){
                
                if(isset($files)){
                    $category_img = new category_image();
                    $name = $files->getClientOriginalExtension();
                    $fileName = rand(11111,99999).'.'.$name;
                    $category_img->images = $fileName;
                     $category_img->product_id = $product_id;
                    
                   
                    $files->move($destinationPaths,$fileName);
                   $category_img->save();
                  
                }
            }
          
        }
        
        
         return redirect()->route('listproduct')->with(['flash_level'=>'success','flash_message'=>'Sửa Thành Công']);
        }
    
      
    }

}
    
