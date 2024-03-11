<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class EquipmentCompany extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name','service_list'
    ];
    public function servicelist(): HasMany
    {
        return $this->hasMany(EquipmentService::class);
    }
}
