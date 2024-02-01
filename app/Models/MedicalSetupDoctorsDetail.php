<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\MedicalSetupDoctors;

class MedicalSetupDoctorsDetail extends Model
{
    use HasFactory;
    protected $table = "tbl_application_medical_setups_doctors_detail";
    protected $fillable = [
        'id',
        'region_id',
        'doctor_id',
        'PMDC',
        'area_id',
        'country_id',
        'city_id',
        'certified',
        'qualification',
        'representative_id',
        'periority',
        'working_with_cp',
        'reason_to_no_working_with_cp',
        'working_with_other_aligner_co',
        'reason_to_working_with_other_aligner_co',
        'cp_marketing_material_at_clinic',
        'remarks_one',
        'remarks_two',
        'remarks_three',
        'is_deleted',
        'create_at',
        'update_at',
    ];

    public function MedcialSetupDoctors(): BelongsTo 
    {
        return $this->belongsTo(MedcialSetupDoctors::class, 'doctor_id', 'id');
    }
}
