<?php

namespace App\Http\Resources;

use App\Models\PaymentScheme;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentSchemeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'sc_type'       => $this->service_contracting_type->name ?? null,
            'vehicle_mode'  => $this->vehicle_mode->name ?? null,
            'price_per_km'  => $this->price_per_km,
        ];
    }
}
