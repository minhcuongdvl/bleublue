<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class category extends Model
{
    protected $table = 'categories_product';
    protected $primaryKey = 'categories_id';
    public $timestamps = true;
    protected $fillable = [    
        'categories_name',
        'categories_slug',
        'categories_parents',
        
       
        
        
    ];
    protected $guarded = ['categories_id'];
    
    public function getData(){
        return self::paginate();
    }
    
   
    
   
}