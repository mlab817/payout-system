<?php

namespace App\Observers;

use App\Models\ValidatedTrip;
use App\Services\GenerateDailyTripService;

class ValidatedTripObserver
{
    public function created(ValidatedTrip $validatedTrip)
    {
        // generate daily trip service
        (new GenerateDailyTripService($validatedTrip))->execute();
    }
}
