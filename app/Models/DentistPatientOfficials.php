<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\PatientCasePictures;

class DentistPatientOfficials extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "tbl_application_dentist_patient_officials";
    protected $fillable = [
        'id',
        'organization_id',
        'dentist_id',
        'username',
        'password',
        'show_password',
        'account_status',
        'mobile',
        'profile_url',
        'patient_setup_show',
        'picture_uploaded',
        'setup_uploaded',
        'receive_date',
        'created_by_reference_table',
        'deleted_by',
        'deleted_by_reference_table',
    ];

    public function PatientCasePictures(): HasMany
    {
        return $this->hasMany(PatientCasePictures::class, 'account_id', 'id');
    }
}
