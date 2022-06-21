<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaymentScheme extends Model
{
    use HasFactory;

    protected $casts = [
        'price_per_km' => 'float',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function service_contracting_type(): BelongsTo
    {
        return $this->belongsTo(ServiceContractingType::class);
    }

    public function vehicle_mode(): BelongsTo
    {
        return $this->belongsTo(VehicleMode::class);
    }
}
