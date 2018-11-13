<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Maestros extends Migration
{

    public function up()
    {
          Schema::create('maestros', function (Blueprint $table) {
                    $table->increments('idm');
					$table->string('nombre',40);
					$table->integer('edad');
					$table->string('correo',100);
					$table->integer('cp');
					$table->string('sexo',1);
					$table->double('beca');
					$table->integer('idc')->unsigned();
		            $table->foreign('idc')->references('idc')->on('carreras');
					
					$table->rememberToken();
				    $table->timestamps();
        });
    }

    public function down()
    {
                Schema::drop('maestros');
    }
}
