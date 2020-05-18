<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournois', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
			$table->string('nom')->unique();
			$table->string('password');
			$table->date('date');
			$table->integer('utilisateurs_id')->nullable();
			$table->integer('cartes_id')->nullable();
			$table->foreign('utilisateurs_id')->references('id')->on('utilisateurs')->onDelete('cascade')->nullable();
			$table->foreign('cartes_id')->references('id')->on('cartes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tournois');
    }
}
