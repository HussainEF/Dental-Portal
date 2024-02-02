<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetupRegion extends Model
{
    use HasFactory;
    protected $table = "tbl_application_setups_regions";
    protected $fillable = [
        'id',
        'region',
        'is_active',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
    ];
}
