<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MedicalCases extends Model
{
    use HasFactory;
    protected $table = "tbl_application_medical_cases";
    protected $fillable = [
        'id',
        'portal_number',
        'hirsch_id',
        'patient',
        'doctor',
        'receive_date',
        'impression_type',
        'arch_upper',
        'arch_lower',
		'country',
		'city',
		'distributor',
		'case_type',
		'case_type_particulars',
		'priority',
		'nature_of_patient',
		'airway_bill_number',
		'description',
		'RX_form',
		'x_rays_opg',
		'x_rays_ceph',
		'file_assessment',
		'stl_1',
		'stl_2',
		'treatment_type',
		'present_case_stage_id',
		'present_case_status_id',
		'present_case_treatment_data_id',
		'target_date_setup_timeline',
		'target_date_aligners_timeline',
		'follow_date_setup_timeline',
		'follow_treatment_procedure',
		'direct_shipped',
		'reboot',
		'reboot_id',
		'hold',
		'pause',
		'ship',
		'status',
		'parent_case',
		'is_expedite',
		'is_deletable',
		'created',
		'created_by',
		'created_by_reference_table',
		'is_deleted',
		'deleted_by',
		'deleted_by_reference_table',
	    'deleted'	
    ];
}
