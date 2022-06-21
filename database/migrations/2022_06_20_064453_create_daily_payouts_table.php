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
        Schema::create('daily_payouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_plan_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            $table->foreignId('payment_scheme_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            $table->date('date');
            $table->unsignedBigInteger('required_trips');
            $table->unsignedBigInteger('actual_trips');
            $table->unsignedBigInteger('deficiencies');
            $table->unsignedBigInteger('excess');
            $table->decimal('per_km', 10, 2);
            $table->decimal('net_payout', 10, 2);
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
        Schema::dropIfExists('daily_trips');
    }
};
