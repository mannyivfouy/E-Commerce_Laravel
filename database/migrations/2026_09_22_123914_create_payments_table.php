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
      Schema::create('payments', function (Blueprint $table) {
         $table->id();
         $table->foreignId('order_id')
            ->constrained('orders')
            ->restrictOnDelete();
         $table->string('payment_number')->unique();
         $table->enum('payment_method', [
            'cash',
            'bakong_khqr'
         ]);
         $table->decimal('amount', 10, 2);
         $table->enum('status', [
            'pending',
            'paid',
            'failed',
            'refunded',
            'cancelled'
         ])->default('pending');
         $table->string('transaction_reference')->nullable();
         $table->timestamp('paid_at')->nullable();
         $table->text('note')->nullable();
         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists('payments');
   }
};
