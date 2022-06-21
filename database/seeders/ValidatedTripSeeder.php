<?php

namespace Database\Seeders;

use App\Models\Trip;
use App\Models\ValidatedTrip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ValidatedTripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('validated_trips')->truncate();
        DB::table('daily_payouts')->truncate();

        $trips = Trip::whereNotNull('start_time')
            ->whereNotNull('end_time')
            ->get();

        foreach ($trips as $trip) {
            ValidatedTrip::create([
                'trip_id' => $trip->id,
                'plate_no'  => $trip->plate_no,
                'start_date' => $trip->start_date,
                'start_time' => $trip->start_time,
                'start_station_id' => $trip->start_station_id,
                'start_user_id' => $trip->start_user_id,
                'end_date' => $trip->end_date,
                'end_time' => $trip->end_time,
                'end_station_id' => $trip->end_station_id,
                'end_user_id' => $trip->end_user_id,
                'bound' => $trip->bound,
                'trip_length_km' => $trip->trip_length_km,
                'remarks' => $trip->remarks,
            ]);
        }
    }
}
