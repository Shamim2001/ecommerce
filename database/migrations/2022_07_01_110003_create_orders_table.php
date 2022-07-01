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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->string('customer_name', 128);
            $table->string('customer_phone_number', 32);
            $table->text('address', 32);
            $table->string('city', 16);
            $table->string('postal_code', 16);
            $table->enum('operational_status', ['pending', 'processing', 'complete'])->default('pending');
            $table->decimal('total_amount', 10, 2);
            $table->decimal('discount_amount', 10, 2)->default(0.00);
            $table->decimal('paid_amount', 10, 2);
            $table->enum('payment_status', ['pending', 'complete'])->default('pending');
            $table->text('payment_details')->nullable();
            $table->foreignId( 'user_id' )->onDelete( 'cascade' );
            $table->foreignId('processed_by')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
};
