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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['(arrêts','dépassements de vitesse','accidents','réparations']);
            $table->text('description');
            $table->string('event_time');
            $table->bigInteger('vehicule_id');
            $table->bigInteger('trajet_id');
            $table->timestamps();

            $table->foreign('vehicule_id')->references('id')->on('vehicules');
            $table->foreign('trajet_id')->references('id')->on('trajets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
