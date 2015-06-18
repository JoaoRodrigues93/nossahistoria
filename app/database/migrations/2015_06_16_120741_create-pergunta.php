<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePergunta extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('perguntas',function($newtable){
            $newtable ->increments('id');
            $newtable ->string('pergunta');
            $newtable ->string('resposta1');
            $newtable ->string('resposta2');
            $newtable ->string('resposta3');
            $newtable ->string('resposta4');
            $newtable ->string('resposta_certa');
            $newtable ->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('perguntas');
	}

}
