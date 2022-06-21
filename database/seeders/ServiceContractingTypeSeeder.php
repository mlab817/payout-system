<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceContractingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'GROSS',
            'NET',
        ];

        foreach ($types as $type) {
            DB::table('service_contracting_types')->insert([
                'name' => $type,
            ]);
        }
    }
}
