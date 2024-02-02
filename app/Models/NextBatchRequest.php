<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NextBatchRequest extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "tbl_application_next_batch_request";
    protected $fillable = [
        'id',
        'name',
        'description',
        'publish_status',
        'organization_id',
        'created',
        'created_by',
        'created_by_reference_table',
        'is_deleted',
		'deleted_by',
		'deleted_by_reference_table',
		'deleted',
    ];
}
