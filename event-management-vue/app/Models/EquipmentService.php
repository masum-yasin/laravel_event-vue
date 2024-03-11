<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class EquipmentService extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo','address','email','equipment_companies_id','category_id','phone','descripation',
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function equipmentcompany(): BelongsTo
    {
        return $this->belongsTo(EquipmentCompany::class,'equipment_companies_id');
    }
}
