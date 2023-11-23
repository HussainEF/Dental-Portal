<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Foundation\Auth\User as Authenticatable;


class DoctorOfficial extends Authenticatable
{
    use HasFactory;
    protected $table="tbl_application_doctor_officials";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'doctor_id',
        'email',
        'code',
        'username',
        'password',
        'mobile',
        'created',
        'created_by',
    ];

    public function MyOrganizationTeam(): BelongsTo 
    {
        return $this->belongsTo(MyOrganizationTeam::class, 'id');
    }
}
