<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalCasesPictures extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "tbl_application_medical_case_pictures";
    protected $fillable = [
        'id',
	    'case_number',
	    'case_id',
	    'name',
	    'picture_portal',
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
