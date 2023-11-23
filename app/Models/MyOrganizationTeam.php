<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class MyOrganizationTeam extends Model
{
    use HasFactory;
    protected $table = "tbl_application_my_organization_team";
    protected $fillable = [
        'id',
	    'HR_id',
	    'employType_ID',
	    'organization_id',
	    'code',
	    'employee_number',
	    'email',
	    'mode_of_employment',
	    'reference_hr_id',
		'reference_phone',
		'reference_relation',
		'employment_status',
		'date_of_joining',
		'date_of_rejoining',
		'date_of_resign',
		'years_of_experience',
		'work_telephone_number',
		'extension',
		'appoint_city',
		'pay_frequency',
		'bank',
		'account_holder_name',
		'account_number',
		'created',
		'created_by',
		'created_by_reference_table',
		'updated_by',
		'updated_at',
		'is_deleted',
		'deleted_by',
		'deleted_by_reference_table',
		'deleted'
    ];

    public function DoctorOfficial(): HasOne
    {
        return $this->hasOne(DoctorOfficial::class, 'doctor_id');    
    }

    public function MedicalTeamRoles(): HasMany
    {
        return $this->hasMany(MedicalTeamRoles::class, 'team_id');
    }

    public function HR(): BelongsTo
    {
        return $this->belongsTo(HR::class, 'id');
    }
}
