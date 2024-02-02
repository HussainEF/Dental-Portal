<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlignercoPatientDiseases extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "tbl_application_alignerco_patient_diseases";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'case_id',
        'disease_id',
        'description',
        // 'is_deletable',
        'created',
        'created_by',
        'created_by_reference_table',
        // 'is_deleted',
        // 'deleted_by',
        // 'deleted_by_reference_table',
        // 'deleted'
    ];
}
