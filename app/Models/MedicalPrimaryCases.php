<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\MedicalPrimaryCasesDetail;

class MedicalPrimaryCases extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = "tbl_application_medical_primary_cases";
    protected $fillable=[
        'id',
        'case_id',
        'sale_representative',	
        'patient',
        'age',
        'gender',	
        'doctor',
        'clinic',
        'receive_date',	
        'impression_type',	
        'impression_particulars',	
        'arch_upper',	
        'arch_lower',	
        'radio_graphs_opg',	
        'radio_graphs_ceph',	
        'bite',	
        'impression_workable_upper',	
        'impression_workable_lower',	
        'intra_extra_oral_pictures',	
        'country',	
        'city',	
        'area',	
        'address',
        'distributor',	
        'case_type',	
        'case_type_particulars',	
        'priority',	
        'nature_of_patient',	
        'airway_bill_number',	
        'description',	
        'RX_form',	
        // 'RX_uploaded_by',//deleted	
        'x_rays_opg',	
        // 'OPG_uploaded_by',	//deleted
        'x_rays_ceph',	
        // 'CEPH_uploaded_by',	//deleted
        'file_assessment',	
        'stl_1',	
        'stl_2',	
        'parent_case',	
        'reboot',	
        'setup_required',	
        'reboot_reason',	
        'doctor_remarks',	
        'is_deletable',	
        'created',	
        'created_by',	
        'created_by_reference_table',	
        'is_deleted',
        'deleted_by',	
        'deleted_by_reference_table',	
        'deleted',	
        'forwarded_production',	
        'forwarded_by',	
        'forwarded',	
        'processed_production',	
        'processed_by',	
        'processed',	
        'initial_assessment',	
        'initial_assessment_by',	
        'is_expedite',	
        'adjunctive_attachment',	
        'adjunctive_extraction',	
        'adjunctive_expansion',	
        'adjunctive_ebt',	
        'adjunctive_ipr',	
        'zero_aligner_required',	
        'is_doable',	
        'status',	
        // 'approve_status',	//deleted
        // 'present_case_stage_id',	//deleted
        // 'hold',	//deleted
        // 'ship',	//deleted
        // 'parent_portal_id',	//deleted
        // 'reboot_comments',	//deleted
        // 'present_case_status_id',//deleted
        // 'dentist_id',//deleted
        // 'dentist_case_present_status_id',//deleted
        // 'patient_email',	//deleted
        // 'patient_state',	//deleted
        // 'patient_country',//deleted
        // 'patient_city',	//deleted
        // 'patient_zip_code',	//deleted
        // 'patient_phone',	//deleted
        // 'patient_address_1',	//deleted
        // 'patient_address_2',	//deleted
        // 'patient_address_3',	//deleted
        // 'instalment',	//deleted
        // 'treatment_type',	//deleted
        // 'allergies',	//deleted
        // 'pregnant',	//deleted
        // 'sale_kit',	//deleted
        // 'full_case_purchase',//deleted	
        // 'retainer_only',	//deleted
        // 'imression_received_in_CP',//deleted
        // 'terms_conditions',	//deleted
        // 'chief_complaint',//deleted
    ];

    public function MedicalPrimaryCasesDetail(): HasMany
    {
        return $this->hasMany(MedicalPrimaryCasesDetail::class, 'primary_case_id', 'id');
    }
}
