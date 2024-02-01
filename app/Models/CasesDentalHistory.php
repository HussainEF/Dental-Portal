<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasesDentalHistory extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "cases_dental_history";
    protected $fillable = [
        // 'id',
        'case_id',
        'gingivitis',
        'recession',
        'mobility',
        'bone_loss',
        'tmj_issues',
        'none',
        'ankylosed_teeth',
        'restoration_veneers',
        'restoration_veneers_data',
        'bridges_implants',
        'bridges_implants_data',
        'crowns_rct',
        'crowns_rct_data',
        // 'impacted_missing_ankylosed',
        // 'impacted_missing_ankylosed_data',
        'created_by',
        // 'updated_by',
        // 'deleted_by',
        // 'is_deleted',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'restoration_veneers_data' => 'array',
        'bridges_implants_data' => 'array',
        'crowns_rct_data' => 'array',
    ];
}
