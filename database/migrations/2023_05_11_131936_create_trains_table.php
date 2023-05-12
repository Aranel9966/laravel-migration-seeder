<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('Azienda')->nullable();
            $table->string('Stazione_di_partenza')->nullable();
            $table->string('Stazione_di_arrivo')->nullable();
            $table->dateTime('Orario_di_partenza')->nullable();
            $table->dateTime('Orario_di_arrivo')->nullable();
            $table->string('Codice_Treno', 50)->nullable();
            $table->decimal('Numero_Carrozze')->nullable();
            $table->boolean('In_orario')->nullable();
            $table->boolean('Cancellato')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
