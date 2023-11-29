<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCdisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cdis', function (Blueprint $table) {
            $table->id();
            $table->string("montantEncaisse");
            $table->date("dateencaisse");
            $table->string("PasDePorteEncaisse");
            $table->string("faciliteDePayment");
            $table->string("loyeRemise");
            $table->tinyInteger('local_id');
            $table->string("cautionEncaisse");
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
        Schema::dropIfExists('cdis');
    }
}
