<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProspectesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospectes', function (Blueprint $table) {
            $table->id();
            $table->string("structure");
            $table->string("contact");
            $table->string("poste");
            $table->string("email");
            $table->string("telephone");
            $table->string("affecter");
            $table->string("commentaire");
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
        Schema::dropIfExists('prospectes');
    }
}
