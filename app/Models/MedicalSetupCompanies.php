<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class MedicalSetupCompanies extends Model
{
    use HasFactory;
    protected $table = "tbl_application_medical_setups_companies";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'name',
        'portal_id',
        'portal_num_prefix',
        'sef_url',
        'description',
        'setup_timeline_days',
        'aligners_timeline_days',
        'dental_notation',
	    'additional_aligners',
	    'deal_with_doctor',
	    'deal_with_direct_consumer',
	    'ipr',
	    'IPR_before_1st',
	    'IPR_before_2nd',
	    'IPR_in_later_stages',
	    'extration',
	    'shipping_address',
	    'country',
	    'online_portal_url',
	    'online_portal_username',
	    'online_portal_password',
	    'logo',
	    'parent',
	    'order',
	    'publish_status',
	    'is_deletable',
	    'created',
	    'created_by',
	    'created_by_reference_table',
	    'is_deleted',
	    'deleted_by',
	    'deleted_by_reference_table',
	    'deleted',
    ];
}
