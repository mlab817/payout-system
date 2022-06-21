<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSchemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schemes = [
            [
                'service_contracting_type_id' => 1,
                'vehicle_mode_id' => 1,
                'price_per_km' => 84,
            ],
            [
                'service_contracting_type_id' => 1,
                'vehicle_mode_id' => 2,
                'price_per_km' => 84,
            ],
            [
                'service_contracting_type_id' => 1,
                'vehicle_mode_id' => 3,
                'price_per_km' => 84,
            ],
            [
                'service_contracting_type_id' => 1,
                'vehicle_mode_id' => 4,
                'price_per_km' => 84,
            ],
            [
                'service_contracting_type_id' => 2,
                'vehicle_mode_id' => 5,
                'price_per_km' => 54,
            ],
            [
                'service_contracting_type_id' => 2,
                'vehicle_mode_id' => 6,
                'price_per_km' => 54,
            ],
            [
                'service_contracting_type_id' => 1,
                'vehicle_mode_id' => 7,
                'price_per_km' => 54,
            ],
            [
                'service_contracting_type_id' => 1,
                'vehicle_mode_id' => 8,
                'price_per_km' => 54,
            ],
            [
                'service_contracting_type_id' => 1,
                'vehicle_mode_id' => 9,
                'price_per_km' => 84,
            ],
            [
                'service_contracting_type_id' => 1,
                'vehicle_mode_id' => 10,
                'price_per_km' => 54,
            ],
            [
                'service_contracting_type_id' => 2,
                'vehicle_mode_id' => 11,
                'price_per_km' => 28,
            ],
            [
                'service_contracting_type_id' => 2,
                'vehicle_mode_id' => 12,
                'price_per_km' => 28,
            ],
            [
                'service_contracting_type_id' => 2,
                'vehicle_mode_id' => 13,
                'price_per_km' => 28,
            ],
            [
                'service_contracting_type_id' => 2,
                'vehicle_mode_id' => 14,
                'price_per_km' => 46.5,
            ],
            [
                'service_contracting_type_id' => 2,
                'vehicle_mode_id' => 15,
                'price_per_km' => 84,
            ],
        ];

        DB::table('payment_schemes')->insert($schemes);
    }
}
