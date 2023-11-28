<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalSetupCaseImpressionType extends Model
{
    use HasFactory;
    protected $table = "tbl_application_medical_setups_case_impression_types";
    protected $fillable = [
        'id',
        'name',
        'sef_url',
        'description',
        'is_deletable',
        'created',
        'created_by',
        'created_by_reference_table',
        'is_deletedIndex',
        'deleted_by',
        'deleted_by_reference_table',
        'deleted',
    ];
}