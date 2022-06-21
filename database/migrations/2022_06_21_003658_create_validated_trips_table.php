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
        Schema::create('validated_trips', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trip_id');
            $table->string('plate_no');
            $table->date('start_date');
            $table->time('start_time');
            $table->unsignedInteger('start_station_id')
                ->nullable();
            $table->unsignedInteger('start_user_id')
                ->nullable();
            $table->date('end_date');
            $table->time('end_time');
            $table->unsignedInteger('end_station_id')
                ->nullable();
            $table->unsignedInteger('end_user_id')
                ->nullable();
            $table->string('bound');
            $table->decimal('trip_length_km', 10, 2)
                ->nullable();
            $table->text('remarks')
                ->nullable();
            $table->timestamps();

            $table->unique('trip_id', 'trip_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('validated_trips');
    }
};
