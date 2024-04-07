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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("customer_id")->constrained()->casecadeOnDelete();
            $table->unsignedInteger("total");
            $table->unsignedInteger("vat");
            $table->foreignId("payment_method_id")->constrained()->casecadeOnDelete();
            $table->string("status");
            $table->unsignedInteger("grand_total");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
