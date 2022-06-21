<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\VehicleResource;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(Request $request)
    {
        $vehicle = new Vehicle;

        if ($request->has('search')) {
            $vehicle = $vehicle
                ->where('operator', 'like', $request->query('search') . '%')
                ->orWhere('route_code',  'like', $request->query('search') . '%')
                ->orWhere('type', 'like', $request->query('search') . '%')
                ->orWhere('plate_no', 'like', $request->query('search') . '%');
        }

        return VehicleResource::collection($vehicle->paginate());
    }
}
