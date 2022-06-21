<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_plan_vehicle', function (Blueprint $table) {
            $table->foreignId('service_plan_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->unsignedInteger('vehicle_id');

            $table->unique(['service_plan_id', 'vehicle_id'], 'sp_vehicle_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_plan_vehicle');
    }
};
