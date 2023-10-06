<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;


    protected $fillable = [

     'photo', 'name', 'address', 'country', 'state', 'lg', 'zip', 'birthdate', 'gender', 'p_mobile',  'p_email', 'p_address', 'admision', 'class', 'section', 'status', 
        

      
    ];
}    
