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
        Schema::create('biletes', function (Blueprint $table) {
            $table->id();
$table->string("number_train");
       $table->string('route_name');
       $table->string("price_class1");
      $table->string("price_class2");
     $table->integer("class1c");
     $table->integer("class2c");
    $table->time("time_start");
    $table->time("time_destination");
    $table->string("duration");
    $table->integer("vagon_number1");
    $table->integer("vagon_number2");
    $table->integer("vagon_number3");
    $table->integer("vagon_number4");
    $table->unsignedBigInteger("admin_id");
    $table->boolean("hidden")->default(false);
    $table->foreign("admin_id")->references("id")->on("admins")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biletes');
    }
};
