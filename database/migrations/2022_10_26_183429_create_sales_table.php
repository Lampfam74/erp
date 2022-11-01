<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->date("datePaiment");
            $table->string("structure");
            $table->string("adresse");
            $table->string("rccm");
            $table->string("ninea");
            $table->string("contact");
            $table->string("poste");
            $table->string("telephone");
            $table->string("email")->unique();
            $table->string("rib");
            $table->string("typeLocal");
            $table->string("categorie");
            $table->string("montantEncaisse");
            $table->string("remise");
            $table->string("modalitePayement");
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
        Schema::dropIfExists('sales');
    }
}
