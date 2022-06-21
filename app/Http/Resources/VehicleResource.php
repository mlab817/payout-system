<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
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
            "id"            => $this->id,
            "region_id"     => $this->region_id,
            "consortium"    => $this->consortium,
            "operator"      => $this->operator,
            "plate_no"      => $this->plate_no,
            "fleet_no"      => $this->fleet_no,
            "type"          => $this->type,
            "route_code"    => $this->route_code,
            "remarks"       => $this->remarks,
            "is_active"     => $this->is_active,
            "is_onboarded"  => $this->is_onboarded,
        ];
    }
}
