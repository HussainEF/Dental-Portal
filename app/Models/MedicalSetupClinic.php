<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalSetupClinic extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "tbl_application_medical_setups_clinics";
    protected $fillable = [
        'id',
	    'clinic_name',
	    'is_deleted',
	    'created_by',
	    'updated_by',
	    'created_at',
	    'updated_at',
    ];
}
