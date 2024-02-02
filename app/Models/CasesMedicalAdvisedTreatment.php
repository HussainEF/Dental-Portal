<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasesMedicalAdvisedTreatment extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "cases_medical_advised_treatment";
    protected $fillable = [
        // 'id',
        'case_id',
        'sc_upper_complete',
        'sc_upper_leave',
        'sc_lower_complete',
        'sc_lower_leave',
        'cr_ipr',
        'cr_proclination',
        'cr_expansion',
        'cr_extraction',
        'treatment_setup',
        'other_extraction',
        'dental_cross_bite',
        'midline_maintain',
        'midline_correct',
        'midline_move_upper',
        'midline_move_lower',
        'canine_class_one_R',
        'canine_class_one_L',
        'canine_class_two_R',
        'canine_class_two_L',
        'canine_class_three_R',
        'canine_class_three_L',
        'molar_class_one_R',
        'molar_class_one_L',
        'molar_class_two_R',
        'molar_class_two_L',
        'molar_class_three_R',
        'molar_class_three_L',
        'incisor_required_overjet',
        'incisor_required_overbite',
        'created_by',
        // 'updated_by',
        // 'deleted_by',
        // 'is_deleted',
        'created_at',
        'updated_at'
    ];
}
