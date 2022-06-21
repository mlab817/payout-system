<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePlan extends Model
{
    use HasFactory;

    public function operator()
    {
        return $this->belongsTo(Operator::class);
    }

    public function payment_scheme()
    {
        return $this->belongsTo(PaymentScheme::class);
    }

    public function route()
    {
        return $this->belongsTo(VehicleRoute::class, 'route_id');
    }

    public function vehicles_service_plans()
    {
        return $this->hasMany(VehicleServicePlan::class);
    }
}
