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
            $table->string("serie");
            $table->integer("nombre");
            $table->date("dateencaisse");
            $table->string("loyeRemise");
            $table->tinyInteger('local_id');
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
