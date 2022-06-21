<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePlanSchedule extends Model
{
    use HasFactory;

    public const PEAK = [
        1 => 'AM',
        2 => 'OFF',
        3 => 'PM',
        4 => 'WHOLE_DAY'
    ];

    public const WEEK_TYPE = [
        1 => 'WEEKDAY',
        2 => 'WEEKEND',
    ];
}
