<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Admin extends Model
{
     
    
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    public $timestamps = true;
    protected $fillable = [    
       'user_name', 
       'user_pass',
      
        
        
    ];
    protected $guarded = ['user_id'];
    
   protected $hidden = [
        'password', 'remember_token',
    ];
    
   
    
   
}