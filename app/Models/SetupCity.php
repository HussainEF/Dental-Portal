<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\SetupCityArea;


class SetupCity extends Model
{
    use HasFactory;
    protected $table = "tbl_application_setups_cities";
    protected $fillable = [
        'id',
        'state_id',
        'name',
        'sef_url',
        'type',
        'publish_status',
    ];

    public function CityArea(): HasMany
    {
        return $this->hasMany(SetupCityArea::class, 'city_id');
    }
}
