<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostBlog extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_name','image','category_id','location','description'
    ];
}
