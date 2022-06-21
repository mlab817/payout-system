<?php

namespace Database\Seeders;

use App\Models\ServicePlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ServicePlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        DB::table('service_plans')->truncate();

        Schema::enableForeignKeyConstraints();

        ServicePlan::factory()->count(10)->create();
    }
}
