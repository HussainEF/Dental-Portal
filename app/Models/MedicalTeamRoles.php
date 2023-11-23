<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;


class MedicalTeamRoles extends Model
{
    use HasFactory;
    protected $table = "tbl_application_medical_team_roles";
    protected $fillable = [
        'idPrimary',
        'team_id',
        'role_id',
        'created',
        'created_by',
        'created_by_reference_table',
        'is_unassigned',
        'unassigned_by',
        'unassigned_by_reference_table',
		'unassigned',
		'is_deleted',
		'deleted_by',
		'deleted_by_reference_table',
		'deleted'
    ];
    
    public function MyOrganizationTeam(): BelongsTo
    {
        return $this->belongsTo(MyOrganizationTeam::class, 'id');
    }
}