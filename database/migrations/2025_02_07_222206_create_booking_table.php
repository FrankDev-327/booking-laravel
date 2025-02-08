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
        if (!Schema::hasTable('booking')) {
            Schema::create('booking', function (Blueprint $table) {
                $table->uuid('id')->primary(true);
                $table->string('start_book_date');
                $table->string('end_book_date');
                $table->uuid('payment_id');
                $table->uuid('user_id');
                $table->uuid('service_id');
                $table->float('total_price', 2);
                $table->enum('status', ['pedndig', 'confirmed', 'cancelled']);
                $table->timestamps();
                $table->engine('InnoDB');
                $table->charset('utf8mb4');

                $table->index((['start_book_date', 'end_book_date']));
            });
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
