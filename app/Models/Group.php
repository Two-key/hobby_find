<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'title',
    'overview',
    'category_id'
];
public function category()
{
    return $this->belongsTo(Category::class);
}
public function posts()   
{
    return $this->hasMany(Post::class);  
}
public function user_join()   
{
    return $this->belongsTo(Join::class);  
}
}
