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
        Schema::create('price_per_cubic', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("price_id");
            $table->enum("category", ["residential","commercial"]);
            $table->decimal("rate_per_cubic", 10, 2);
            $table->date("effective_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_per_cubic');
    }
};
