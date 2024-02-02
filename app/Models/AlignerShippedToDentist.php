<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlignerShippedToDentist extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "tbl_application_aligners_shipped_to_dentist";
    protected $fillable = [
        'id',
        'approval_id',
        'case_id',
        'case_reference_number',
        'request_type',
        'status',
        'tracking_number',
        'delivery_service',
        'shipped_date',
		'shipped_remarks',
		'receive_date',
		'created',
		'created_by',
		'created_by_reference_table',
		'is_deleted',
		'deleted_by',
		'deleted_by_reference_table',
		'deleted',
    ];
}
