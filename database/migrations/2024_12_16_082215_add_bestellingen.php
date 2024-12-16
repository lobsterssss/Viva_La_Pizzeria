<?php

use App\Models\User;
use App\Enums\Status;
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
        Schema::create('Bestellings', function (Blueprint $table) {
            $table->id('BestelID');
            $table->foreignId('GebruikerID')->nullable();
            $table->foreignId('KortingID')->nullable();
            $table->date('Datum');
            $table->string('Status')->default(Status::Nbeggonen);
        });

        Schema::create('Bestelling_pizzas', function (Blueprint $table) {
            $table->id('ID');
            $table->foreignId('PizzaID');
            $table->foreignId('BestelID');
            $table->foreignId('GrootteID')->default(1);
            $table->integer('Aantal');
            $table->double('Prijs');
        });

        Schema::create('Bestelling_dranks', function (Blueprint $table) {
            $table->id('ID');
            $table->foreignId('DrankID');
            $table->foreignId('BestelID');
            $table->integer('Aantal');
            $table->double('Prijs');
        });

        Schema::create('Groottes', function (Blueprint $table) {
            $table->id('GrootteID');
            $table->string('Pizzagrootte');
            $table->double('Prijs');
        });

        Schema::create('Korting', function (Blueprint $table) {
            $table->id('KortingID');
            $table->string('Kortingcode');
            $table->double('Korting');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
