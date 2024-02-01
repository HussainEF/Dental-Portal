<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\MedicalPrimaryCases;


class DentistLoyalityPointsNotifications extends Model
{
    use HasFactory;
    protected $table = "tbl_application_dentist_loyalty_points_notifications";
    protected $fillable = [
        'id',
        'primary_case_id',
        'dentist_id',
        'status',
        'is_deleted',
        'created_by',
        'updated_by',	
        'created_at',	
        'updated_at',
    ];

    public function MedicalPrimaryCases(): BelongsTo
    {
        return $this->belongsTo(MedicalPrimaryCases::class, 'primary_case_id');
    }
}
