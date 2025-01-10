<?php

use App\Models\User;
use App\Enums\Status;
use App\Models\Bestelling;
use App\Models\Drank;
use App\Models\Grootte;
use App\Models\Korting;
use App\Models\Pizza;
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
            $table->foreignIdFor(User::class, 'GebruikerID')->nullable();
            $table->foreignIdFor(Korting::class ,'KortingID')->nullable();
            $table->date('Datum');
            $table->enum('Status', ['Nog niet beggonen', 'Beggonen', 'Klaar'])->default(Status::Nog_niet_beggonen);
        });

        Schema::create('Bestelling_pizzas', function (Blueprint $table) {
            $table->id('ID');
            $table->foreignIdFor(Pizza::class, 'PizzaID');
            $table->foreignIdFor(Bestelling::class, 'BestelID');
            $table->foreignIdFor(Grootte::class, 'GrootteID')->default(1);
            $table->integer('Aantal');
            $table->double('Prijs');
        });

        Schema::create('Bestelling_dranks', function (Blueprint $table) {
            $table->id('ID');
            $table->foreignIdFor(Drank::class, 'DrankID');
            $table->foreignIdFor(Bestelling::class, 'BestelID');
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
        Schema::dropIfExists('Bestellings');
        Schema::dropIfExists('Bestelling_pizzas');
        Schema::dropIfExists('Bestelling_dranks');
        Schema::dropIfExists('Groottes');
        Schema::dropIfExists('Korting');
    }
};
