<?php

use App\Models\Ingredienten;
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
        Schema::create('Pizzas', function (Blueprint $table) {
            $table->id('PizzaID');
            $table->string('Naam');
            $table->string('Omschrijving');
            $table->double('Prijs');
            $table->string('FotoUri')->default('Generic_pizza');        
        });
        Schema::create('Dranks', function (Blueprint $table) {
            $table->id('DrankID');
            $table->string('Naam');
            $table->string('Omschrijving');
            $table->double('Prijs');
            $table->string('FotoUri')->default('Generic_drank');        
        });
        Schema::create('Pizza_ingredients', function (Blueprint $table) {
            $table->id('ID');
            $table->foreignIdFor(Ingredienten::class ,'IngredientID');
            $table->foreignIdFor(Pizza::class, 'PizzaID');
        });

        Schema::create('Ingredients', function (Blueprint $table) {
            $table->id('IngredientID');
            $table->string('Naam');
            $table->integer('Voorraad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pizzas');
        Schema::dropIfExists('Drank');
        Schema::dropIfExists('Pizza_ingredient');
        Schema::dropIfExists('Ingredient');
    }
};
