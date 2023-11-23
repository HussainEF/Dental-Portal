<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;
class HR extends Model
{
    use HasFactory;
    protected $table = "tbl_application_hr";
    protected $fillable = [
        'id',
        'prefix',
        'name',
        'father_name',
        'gender',
        'marital_status',
        'religion',
        'nationality',
        'language',
		'date_of_birth',
		'blood_group',
		'identity_card',
		'identity_card_formatted',
		'identity_card_expiry',
		'driving_licence',
		'driving_licence_expiry',
		'personal_email',
		'mobile',
		'mobile_formatted',
		'street_address',
		'mobile_confirmation_code',
		'mobile_verified_status',
		'country',
		'state',
		'city',
		'company',
		'about',
		'photo',
		'created',
		'created_by',
		'created_by_reference_table',
		'is_deleted',
		'deleted_by',
		'deleted_by_reference_table',
		'deleted'
    ];

    public function MyOrganizationTeam(): HasOne
    {
        return $this->hasOne(MyOrganizationTeam::class, 'HR_id');
    }
}
