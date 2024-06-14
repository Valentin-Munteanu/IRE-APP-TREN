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
        // PASUL 1 -> CREAREA MIGRATILOR TABELUL DE RUTE + BILETE + PASSAGERS VAGONS +  CONECTAREA INTR-E TABELELE POTRIVITE
// PASUL 2 NAVIGAREA IN MODEL SPECIFICARE TIP DE CONECTIUNE 'UNU LA UNU ,UNUL LA MAI MULTI'[belongsTo, hasToMany]

        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->string("train_number");
            $table->string("route");
            $table->string("station_start");
            $table->string("destination");
            $table->time("time_start");
            $table->time("time_destination");
            $table->string("duration");
            $table->unsignedBigInteger("biletes_id");
            $table->unsignedBigInteger("admin_id");
            $table->foreign("biletes_id")->references("id")->on("biletes")->onDelete("cascade");
            $table->foreign("admin_id")->references("id")->on("admins")->onDelete("cascade");
        $table->boolean("hidden")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routes');
    }
};
;
