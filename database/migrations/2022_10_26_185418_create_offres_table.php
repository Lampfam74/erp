<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->string("typeLocale");
            $table->string("ficheTechnique");
            $table->Integer("quantiteAffecter");
            $table->Integer("PasDePorte");
            $table->Integer("caution");
            $table->Integer("chargeLocative");
            $table->tinyInteger('user_id');
            $table->tinyInteger('soft_deleted')->default(0);
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
        Schema::dropIfExists('offres');
    }
}
