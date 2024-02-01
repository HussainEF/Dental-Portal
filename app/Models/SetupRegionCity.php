<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetupRegionCity extends Model
{
    use HasFactory;
    protected $table = "tbl_application_setups_region_cities";
    protected $fillable = [	
        'id',
        'region_id',
        'city_id',
        'is_deleted',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
    ];
}
