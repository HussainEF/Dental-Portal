<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\MedicalCaseSetupUploadData;

class MedicalCaseSetupData extends Model
{
    use HasFactory;
	protected $primaryKey = 'id';
    protected $table = "tbl_application_medical_case_setup_data";
    protected $fillable = [
        'id',
        'case_id',
        'arch_movement',
        'night_time',
        'setup_data',
        'treatment_diagram',
        'attachment',
        'attachment_type',
        'IPR',
		'IPR_type',
		'IPR_upper',
		'IPR_lower',
		'extraction',
		'extraction_type',
		'extraction_upper',
		'extraction_lower',
		'EBT',
		'EBT_type',
		'cutouts',
		'cutouts_type',
		'slits',
		'slits_type',
		'molar_movement',
		'number_stages_upper',
		'number_stages_lower',
		'is_deletable',
		'over_time',
		'created',
		'created_by',
		'created_by_reference_table',
		'is_deleted',
		'deleted_by',
		'deleted_by_reference_table',
		'deleted',
    ];

	public function MedicalCaseSetupUploadData(): HasMany
	{
		return $this->hasMany(MedicalCaseSetupUploadData::class, 'setup_data_id', 'id');
	}
}

