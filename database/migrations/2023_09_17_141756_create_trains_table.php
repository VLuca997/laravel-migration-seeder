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
        Schema::create('trains', function (Blueprint $table) {//crea una tabella ( update_trains_create, cotntiene la funzione Schema::table, che invece impone che sia gia esistente una tabelle, quindi la modifica.)
            $table->id();
            $table->string('company', 64);//Azienda
            $table->string('dep_station', 64);//Stazione di partenza
            $table->string('arr_station', 64);//stazione di arrivo
            $table->timestamp('dep_timestamp')->nullable();//orario di partenza
            $table->timestamp('arr_timestamp')->nullable();//orario di arrivo
            $table->string('code', 10)->unique();//codice treno
            $table->unsignedtinyInteger('train_cars_number',);//numero carrozze
            $table->boolean('in_time')->default(true);// in orario
            $table->boolean('deleted')->default(true);// cancellato
            $table->timestamps();// numero secondi passati da 1/1/1970
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
