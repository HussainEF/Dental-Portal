<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\MedicalPrimaryCases;

class MedicalPrimaryCasesDetail extends Model
{
    use HasFactory;
    protected $table = "tbl_application_medical_primary_cases_details";
    protected $fillable = [
        'id',
        'case_id',
        'primary_case_id',
        'approve_status',
        'present_case_stage_id',
        'hold',
        'ship',
        'parent_portal_id',
        'reboot_comments',
        'present_case_status_id',
        'dentist_id',
        'dentist_case_present_status_id',
        'patient_email',
        'patient_state',
        'patient_country',
        'patient_city',
        'patient_zip_code',
        'patient_phone',
        'patient_address_1',
        'patient_address_2',
        'patient_address_3',
        'instalment',
        'treatment_type',
        'allergies',
        'pregnant',
        'sale_kit',
        'full_case_purchase',
        'retainer_only',
        'imression_received_in_CP',
        'terms_conditions',
        'chief_complaint',
        'RX_uploaded_by',
        'OPG_uploaded_by',
        'CEPH_uploaded_by',
        'stl_1_uploaded_by',
        'stl_2_uploaded_by',
        'is_deleted',
        'created_by',
        'created_at',
	    'updated_at',
    ];

    public function MedicalPrimaryCases(): BelongsTo
    {
        return $this->belongsTo(MedicalPrimaryCases::class, 'id');
    }
}

