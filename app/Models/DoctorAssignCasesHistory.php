<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorAssignCasesHistory extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "tbl_application_alignerco_doctor_assign_cases_history";
    protected $fillable = [
        'id',
        'case_id',
        'status_id',
        'patient_approve_status',
        'link',
        'code',
        'comment',
        'description',
        'is_deletable',
        'created',
        'receive_date',
        'created_by',
        'created_by_reference_table',
        'is_deleted',
        'deleted_by',
        'deleted_by_reference_table',
        'deleted',
    ];
}
