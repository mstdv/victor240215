<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ordens', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('cod_departamento');
            $table->string('departamento');
            $table->string('quien_reporta');
            $table->string('ficha_trabajador');
            $table->string('correo');
            $table->string('telefono');
            $table->string('marca');
            $table->string('tipo_equipo');
            $table->string('modelo');
            $table->string('servicio');
            $table->string('problema');
            $table->string('observaciones');
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
		Schema::drop('ordens');
	}

}
