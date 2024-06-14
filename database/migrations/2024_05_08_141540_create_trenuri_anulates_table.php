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
        Schema::create('trenuri_anulates', function (Blueprint $table) {
            $table->id();
            $table->string("train_number");
            $table->string("route");
            $table->string("station_start");
            $table->string("destination");
            $table->time("time_start")->nullable();
            $table->time("time_destination")->nullable();
            $table->unsignedBigInteger("admin_id");
            $table->foreign("admin_id")->references("id")->on("admins")->onDelete("cascade");
        $table->boolean("hidden")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trenuri_anulates');
    }
};
