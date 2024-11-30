<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('raffles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->foreignId('lottery_id')->nullable()->constrained('lotteries')->onDelete('set null');
            $table->string('image')->nullable();
            $table->enum('status', ['active', 'inactive', 'completed', 'canceled'])->default('active');
            $table->decimal('ticket_price', 10, 2);
            $table->integer('ticket_quantity');
            $table->decimal('sales_goal', 10, 2);
            $table->integer('tickets_sold')->default(0);
            $table->integer('quantity_number_draws')->default(0);
            $table->decimal('collected', 10, 2)->default(0);
            $table->foreignId('organizer_id')->nullable()->constrained('users')->onDelete('set null');
            $table->date('start_date'); 
            $table->date('draw_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('raffles');
    }
};
