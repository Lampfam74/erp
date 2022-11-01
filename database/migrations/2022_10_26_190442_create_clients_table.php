<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {

            $table->id();
            $table->date("datePaiment");
            $table->string("structure");
            $table->string("telephone");
            $table->string("local");
            $table->string("categorie");
            $table->string("montantEncaisse");
            $table->string("remise");
            $table->string("PasDePorte");
            $table->string("faciliteDePayment");
            $table->string("caution");
            $table->tinyInteger('soft_deleted')->default(0);
            $table->tinyInteger('user_id');
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
        Schema::dropIfExists('clients');
    }
}
