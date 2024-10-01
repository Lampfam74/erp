<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cdds', function (Blueprint $table) {
            $table->id();
            $table->date("debut");
            $table->string("forfait");
            $table->string("typePaiement");
            $table->string("duree");
            $table->string("produit");
            $table->string("local");
            $table->string("dateFin");
            $table->tinyInteger('soft_deleted')->default(0);
            $table->tinyInteger('user_id');
            $table->tinyInteger('client_id');
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
        Schema::dropIfExists('cdds');
    }
}
