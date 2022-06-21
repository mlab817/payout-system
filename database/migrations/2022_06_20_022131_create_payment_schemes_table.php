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
        Schema::create('payment_schemes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_contracting_type_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete(); //gross_hcw_exclusive, gross_all, net
            $table->foreignId('vehicle_mode_id')
                ->nullable()
                ->constrained('rama.modes')
                ->nullOnDelete(); // pub, puj, etc
            $table->decimal('price_per_km');
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
        Schema::dropIfExists('payment_modes');
    }
};
