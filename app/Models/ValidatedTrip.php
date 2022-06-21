<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class ValidatedTrip extends Model implements AuditableContract
{
    use HasFactory;

    use Auditable;

    protected $fillable = [
        'trip_id',
        'plate_no',
        'start_date',
        'start_time',
        'start_station_id',
        'start_user_id',
        'end_date',
        'end_time',
        'end_station_id',
        'end_user_id',
        'bound',
        'trip_length_km',
        'remarks',
    ];
}
