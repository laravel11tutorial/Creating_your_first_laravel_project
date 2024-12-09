<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HashFactory;
class products extends Model
{
    use HashFactory;
    protected $Fillable =[
        "name",
        "price",
        "description"
    ];
    
}
