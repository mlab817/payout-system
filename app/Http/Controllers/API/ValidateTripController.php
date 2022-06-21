<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ValidatedTrip;
use Illuminate\Http\Request;

class ValidateTripController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        return response()->json(ValidatedTrip::paginate());
    }

    public function show(Request $request, ValidatedTrip $validatedTrip)
    {
        return response()->json([
            'success' => !!$validatedTrip,
            'data' => $validatedTrip,
        ]);
    }

    public function store(Request $request)
    {
        $validatedTrip = ValidatedTrip::create($request->all());

        return response()->json([
            'success' => !!$validatedTrip,
            'data' => $validatedTrip,
        ]);
    }

    public function update(Request $request, ValidatedTrip $validatedTrip)
    {
        $success = $validatedTrip->update($request->all());

        return response()->json([
            'success' => $success,
            'data' => $validatedTrip,
        ]);
    }

    public function destroy(ValidatedTrip $validatedTrip)
    {
        return response()->json([
            'success' => $validatedTrip->delete(),
            'data' => null,
        ]);
    }
}
