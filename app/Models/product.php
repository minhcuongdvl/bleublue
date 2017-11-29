<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [    
      'product_name', 
        'product_price',
        'product_material'.
        'product_size',
        'product_sizedetail',
        'product_maker',
        'product_origin',
        'product_handing',
        'product_manufacturing',
        'product_srandarbs',
        'product_derector',
        'product_derector',
        'product_image',
        
        
    ];
    protected $guarded = ['id'];
    
    public function getData(){
        return self::paginate();
    }
    
   
    
   
}