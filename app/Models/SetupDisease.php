<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetupDisease extends Model
{
    use HasFactory;
    protected $table = "tbl_application_medical_setups_diseases";
    protected $fillable = [	
        'id',
        'name',
        'sef_url',
        'description',
        'order',
        'publish_status',
        'is_deletable',
        'created',
        'created_by',
        'created_by_reference_table',
        'is_deleted',
        'deleted_by',
        'deleted_by_reference_table',
        'deleted',
    ];
}
