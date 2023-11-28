<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\SetupCity;

class SetupCityArea extends Model
{
    use HasFactory;
    protected $table = "tbl_application_setups_cities_areas";
    protected $fillable = [
        'id',
        'city_id',
        'area',
        'publish_status',
        'is_deleted',
        'created_at',
    ];

    public function City(): BelongsTo
    {
        return $this->belongsTo(SetupCity::class, 'id');
    }
}
