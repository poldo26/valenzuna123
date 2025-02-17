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
        Schema::create('billing', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("bill_id");
            $table->integer("client_id");
            $table->decimal("totalAmount", 10, 2);
            $table->decimal("balance", 10, 2);
            $table->date("due_date");
            $table->enum("status", ["paid","unpaid"]);
            $table->integer("reading_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billing');
    }
};
