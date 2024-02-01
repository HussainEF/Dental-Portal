<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\DoctorOfficial;
use App\Models\MedicalSetupDoctorsDetail;

class MedicalSetupDoctors extends Model
{
    use HasFactory;
    protected $table = "tbl_application_medical_setups_doctors";
    protected $fillable = [
        'id',
        'name',
        'sef_url',
        'emailry',
        'phonery',
        'account_name',
        'special_instructions',
        'file_instructions',
        'description',
		'is_deletable',
		'created',
		'created_by',
		'created_by_reference_table',
		'is_deleted',
		'deleted_by',
		'deleted_by_reference_table',
		'deleted',
    ];

    public function DoctorOfficial(): HasOne
    {
        return $this->hasOne(DoctorOfficial::class, 'doctor_id', 'id');
    }

    public function MedicalSetupDoctorsDetail(): HasOne
    {
        return $this->hasOne(MedicalSetupDoctorsDetail::class, 'doctor_id', 'id');
    }
}
