<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DentistLoyalityPoints extends Model
{
    use HasFactory;
    protected $table = "tbl_application_dentist_loyality_points";
    protected $fillable = [
        'id',
        'case_id',
        'dentist_id',
        'points',
        'date',
        'is_avail',
        'is_deleted',
        'created_by',
        'created_at',
        'updated_at',
    ];
}
