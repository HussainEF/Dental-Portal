<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


use App\Models\MedicalCaseSetupData;


class MedicalCaseSetupUploadData extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = "tbl_application_medical_case_setup_upload_data";
    protected $fillable = [
        'id',
        'setup_data_id',
        'case_id',
        'upload_link',
        'password',
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

    public function MedicalCaseSetupData(): BelongsTo
    {
        return $this->belongsTo(MedicalCaseSetupData::class, 'setup_data_id', 'id');
    }
}
