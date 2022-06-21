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
        Schema::create('service_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('operator_id');
            $table->unsignedInteger('route_id');
            $table->unsignedInteger('nau')
                ->default(0);
            $table->unsignedInteger('nou')
                ->default(0);
            $table->decimal('operating_hours_number', 4, 2);
            $table->time('operating_hours_start');
            $table->time('operating_hours_end');
            $table->unsignedInteger('stations_count');
            $table->decimal('dwell_time', 4);
            $table->unsignedInteger('weekday_required_trips')
                ->default(0);
            $table->unsignedInteger('weekend_required_trips')
                ->default(0);
            $table->foreignId('payment_scheme_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();
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
        Schema::dropIfExists('service_plans');
    }
};
