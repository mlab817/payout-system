<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $connection = 'rama';

    protected $table = 'vehicle_inventory';

    public function vehicle_service_plan()
    {
        return $this->belongsTo(VehicleServicePlan::class);
    }
}
