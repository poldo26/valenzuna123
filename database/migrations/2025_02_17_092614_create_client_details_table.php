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
        Schema::create('client_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->string("firstname", 50);
            $table->string("lastname", 50);
            $table->string("middlename", 50);
            $table->string("email", 50);
            $table->string("phone", 50);
            $table->string("meter_code", 50);
            $table->enum("category", ["residential","commercial"]);
            $table->date("registration_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_details');
    }
};
