<?php

namespace App\Models;




use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable =['name'];
    public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }
    public function sponsor(): HasMany
    {
        return $this->hasMany(Sponsor::class);
    }
    public function eventtype(): HasMany
    {
        return $this->hasMany(Eventtype::class);
    }
    public function schedule(): HasMany
    {
        return $this->hasMany(ScheduleEvent::class);
    }
    public function venus(): HasMany
    {
        return $this->hasMany(EventVenues::class);
    }
    public function speaker(): HasMany
    {
        return $this->hasMany(EventSpeaker::class);
    }
    public function servicelist(): HasMany
    {
        return $this->hasMany(EquipmentService::class);
    }
}
