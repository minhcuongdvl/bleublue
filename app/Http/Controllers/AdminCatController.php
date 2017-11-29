<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\CateRequest;
use App\Models\category;



class AdminCatController extends Controller{
    
    public function index(){
        
        $category = new category();
        $data = $category->getData();
        
        

        return view('admin-bleu.master.category.admin-category',array('datacategory' => $data));
       
    }
    
    public function addcategory(){
        
        return view('admin-bleu.master.category.add-category');
       
    }
    public function postcategory(CateRequest $request){
        

        $category = new category;
        $category->categories_name = $request->category_name;
        $category->categories_slug = changeTitle($request->category_name);
        $category->categories_parents = 0;
        $category->save();
      
        
        return redirect()->route('listcate')->with(['flash_level'=>'success','flash_message'=>'Thêm Thành Công']);
        
    }
    
    public function deletecategory($id){
        
        $cate = category::find($id);
       $cate->delete();
       return redirect()->route('listcate')->with(['flash_level'=>'success','flash_message'=>'Xóa Thành Công']);
    }
    
    public function editcategory($id){
    $data = category::findOrFail($id);
    
    return view('admin-bleu.master.category.edit-category', compact('data','id'));

      
    }
    public function posteditcategory(Request $request,$id){
        $categoty_name = $request->category_name;
        if($categoty_name == null){
        $this->validate($request, 
                ['categories_name'=>'required'],
                ['categories_name.required'=>'Vui Lòng Nhập Tên Category Muốn thay đổi']
                
                );
        }else{
        $category = category::find($id);
        $category->categories_name = $request->category_name;
        $category->categories_slug = changeTitle($request->category_name);
        $category->categories_parents =0;
        $category->save();
         return redirect()->route('listcate')->with(['flash_level'=>'success','flash_message'=>'Sửa Thành Công']);
        }
    
      
    }

}