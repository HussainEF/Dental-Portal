<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DentistLoyalityPointsTransactions extends Model
{
    use HasFactory;
    protected $table = "tbl_application_dentist_loyality_points_transactions";
    protected $fillable = [
        'id',	
        'dentist_id',	
        'remaining',	
        'avail_balance',	
        'avail_request_comment',	
        'status',	
        'is_deleted',	
        'created_by',	
        'updated_by',	
        'created_at',	
        'updated_at',
    ];
}
