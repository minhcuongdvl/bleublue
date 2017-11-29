<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class category_image extends Model
{
    protected $table = 'categories_image';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [    
      '	images', 
        'product_id',
       
        
    ];
    protected $guarded = ['id'];
    
    public function getData(){
        return self::paginate();
    }
    
   
    
   
}