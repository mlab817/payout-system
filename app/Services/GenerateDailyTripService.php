<?php

namespace App\Services;

use App\Models\DailyPayout;
use App\Models\Trip;
use App\Models\ValidatedTrip;
use App\Models\Vehicle;
use Carbon\Carbon;

/**
 * Once a trip is validated,
 * it will be aggregated here and
 * the net payout will be computed
 */
class GenerateDailyTripService
{
    public ValidatedTrip $trip;

    public mixed $date;

    public mixed $time;

    public function __construct(ValidatedTrip $trip)
    {
        $this->trip = $trip;
        $this->date = $trip->start_date;
        $this->time = $trip->start_time;
    }

    public function execute(): void
    {
        // get service plan info from plate_no
        $vehicle = Vehicle::where('plate_no', $this->trip->plate_no)->first();

        // retrieve service plan for the vehicle
        $servicePlan = $vehicle->service_plan;
        $date = $this->trip->start_date;
        //
        $dailyPayout = DailyPayout::updateOrCreate([
            'service_plan_id'   => $servicePlan->id,
            'date'              => $date,
        ], []);

        $actualTrips = $dailyPayout->actual_trips + 1; // increment by one

        $dailyPayout->actual_trips = $actualTrips;

        $requiredTrips = Carbon::parse($date)->isWeekday()
            ? $servicePlan->weekday_required_trips
            : $servicePlan->weekend_required_trips;

        $deficiencies = $actualTrips >= $requiredTrips
            ? 0
            : $requiredTrips - $actualTrips;

        $net = $actualTrips - $deficiencies;

        $pricePerKm = $servicePlan->payment_scheme->price_per_km;

        $dailyPayout->required_trips = $requiredTrips;
        $dailyPayout->net = $net;
        $dailyPayout->per_km = $pricePerKm;
        $dailyPayout->net_payout = $pricePerKm * $net;

        $dailyPayout->save();
    }

    /*
     *
     * return $peak ['am', 'off', 'pm', 'whole']
     */
    public function getPeak($servicePlan, $time)
    {
        return null;
    }

    public function getRequiredTrips($servicePlan, $date, $peak)
    {

    }
}
