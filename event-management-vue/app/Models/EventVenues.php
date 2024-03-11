<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;




class EventVenues extends Model
{
    use HasFactory;
    protected $fillable =[
        'category_id','event_address','latitude','longitude','sponsors_id','description','image'
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function sponsor(): BelongsTo
    {
        return $this->belongsTo(Sponsor::class, 'sponsors_id');
    }
}
