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
        Schema::create('service_plan_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_plan_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->unsignedTinyInteger('day_type'); // 1 = weekday, 2 = weekday
            $table->unsignedTinyInteger('peak');
            $table->unsignedTinyInteger('number_vehicles');
            $table->unsignedTinyInteger('required_trips');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_plan_schedules');
    }
};
