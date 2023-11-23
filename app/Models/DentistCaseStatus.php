<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DentistCaseStatus extends Model
{
    use HasFactory;
    protected $table="tbl_application_dentist_case_status";

    protected $fillable=[
        'id',
        'name',
        'self_url',
        'description',
        'parent',
        'order',
        'publish_status',
        'is_deleteable',
        'created',
        'created_by',
        'created_by_reference_table',
        'is_deleted',
        'deleted_by',
        'deleted_by_reference_table',
        'deleted'
    ];
}
