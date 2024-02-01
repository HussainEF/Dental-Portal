<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DentistLoyalityPointsCalculation extends Model
{
    use HasFactory;
    protected $table = "tbl_application_dentist_loyality_points_calculation";
    protected $fillable = [
        'id',
        'dentistID',
        'grandTotal',
        'remaining',
        'avail',
        'is_deleted',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
}
