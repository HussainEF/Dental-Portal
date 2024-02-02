<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasesDentalExamination extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "cases_dental_examination";
    protected $fillable = [
        // 'id',
        'case_id',
        'incisor_relationship_overjet',
        'incisor_relationship_overbite',
        'teeth_not_to_be_moved',
        'other_to_be_moved',
        'treatment_indicated_upper',
        'treatment_indicated_lower',
        'three_to_three_upper',
        'five_to_five_upper',
        'seven_to_seven_upper',
        'three_to_three_lower',
        'five_to_five_lower',
        'seven_to_seven_lower',
        'black_triangles_present',
        'black_triangles_absent',
        'midline_centered_upper',
        'midline_shift_to_left_upper',
        'midline_shift_to_right_upper',
        'midline_centered_lower',
        'midline_shift_to_left_lower',
        'midline_shift_to_right_lower',
        'cross_bite_skeletal',
        'cross_bite_dental',
        'created_by',
        // 'updated_by',
        // 'deleted_by',
        // 'is_deleted',
        'created_at',
        'updated_at'
    ];
}
