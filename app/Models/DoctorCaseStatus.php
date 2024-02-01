<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorCaseStatus extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "tbl_application_alignerco_doctor_case_status";
    protected $fillable = [
        'id',
        'name',
        'sef_url',
        'description',
        'parent',
        'order',
        'publish_status',
        'created',
        'created_by',
        'created_by_reference_table',
        'is_deleted',
        'deleted_by',
        'deleted_by_reference_table',
        'deleted',
    ];
}
