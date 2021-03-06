<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
//    protected $with = [
////        'categories'
//    ];
    public function category(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }
//
//    public function categories(){
//        $this->morphedByMany(Category::class,'category_product');
//    }
    public function categories(){
       return $this->belongsToMany(Category::class);
    }
    public function users(){
       return $this->belongsToMany(User::class)->withPivot('favorite');
    }


}
