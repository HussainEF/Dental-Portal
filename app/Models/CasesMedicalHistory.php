<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasesMedicalHistory extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "cases_medical_history";
    protected $fillable = [
        'id',
        'case_id',
        'illness',
        'medications',
        'allergy',
        'chemo_radiotherapy',
        'steriods_bisphosphonates',
        'created_by',
        // 'updated_by',
        // 'deleted_by',
        // 'is_deleted',
        'created_at',
	    'updated_at'
    ];
}
