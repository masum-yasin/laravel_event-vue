<?php

namespace App\Models;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EventSpeaker extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id','speaker_name','image','phone','email','facebook','twitter','title',
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function schedule(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }

}
