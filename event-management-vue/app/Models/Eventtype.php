<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Eventtype extends Model
{
    use HasFactory;
    protected $fillable = [
        'categories_id','image','price','description','availibility','event_name'
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'categories_id');
    }
}
