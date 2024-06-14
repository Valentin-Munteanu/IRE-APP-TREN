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
        Schema::create('passagers_vagon1s', function (Blueprint $table) {
            $table->id();
            $table->string("person_name");
            $table->string("person_lastname");
            $table->string("email");
$table->string("totalPrice");
$table->string("selectedSeats");
$table->string("selectedDate");
            $table->foreignId("biletes_id")->constrained()->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passagers_vagon1s');
    }
};
