<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors';
    protected $guarded = ['false'];

//    public function belongsProduct()
//    {
//        $this->belongsTo(Product::class);
//    }
}
