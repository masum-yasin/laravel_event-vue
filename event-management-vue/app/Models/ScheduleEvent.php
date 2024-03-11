<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class ScheduleEvent extends Model
{
    use HasFactory;
    protected $fillable = [
        'day_number','start_time','ending_time','category_id','title','event_speaker_id'
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function speaker(): BelongsTo
    {
        return $this->belongsTo(EventSpeaker::class,'event_speaker_id');
}
}
