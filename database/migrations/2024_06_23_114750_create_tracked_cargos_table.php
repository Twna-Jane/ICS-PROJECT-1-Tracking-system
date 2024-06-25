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
        Schema::create('tracked_cargos', function (Blueprint $table) {
            $table->id();
            $table->string('awbno');
            $table->foreign('awbno')->references('awbno')->on('cargos');
            $table->string('flight');
            $table->string('status');
            $table->string('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracked_cargos');
    }
};
