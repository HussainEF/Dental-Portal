<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\DentistPatientOfficials;

class PatientCasePictures extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "tbl_application_alignerco_patient_case_pictures";
    protected $fillabel = [
        'id',
        'push_status',
        'account_id',
        'picture_of',
        'picture_type',
        'steps',
        'case_id',
        'name',
        'type',
		'public_url',
		'view_status',
		'is_deletable',
		'created',
		'created_by',
		'created_by_reference_table',
		'is_deleted',
		'deleted_by',
		'deleted_by_reference_table',
		'deleted',
    ];

    public function DentistPatientOfficials(): BelongsTo
    {
        return $this->belongsTo(DentistPatientOfficials::class, 'account_id', 'id');
    }
}
