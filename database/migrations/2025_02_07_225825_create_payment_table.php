<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->uuid('id')->primary(true);
            $table->uuid('booking_id');
            $table->float('amount', 2);
            $table->string('status');
            $table->string('payment_method');
            $table->string('transaction_id');
            $table->timestamps();
            $table->engine('InnoDB');
            $table->charset('utf8mb4');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
