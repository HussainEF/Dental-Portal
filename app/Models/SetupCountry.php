<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetupCountry extends Model
{
    use HasFactory;
    protected $table = "tbl_application_setups_countries";
    protected $fillable = [
        'id',
        'name',
        'sef_url',
        'code',
        'code2',
        'code3',
        'publish_status',
    ];
}
