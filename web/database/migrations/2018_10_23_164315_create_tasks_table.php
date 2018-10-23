<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            // Corresponde la tabla de origen proyecto o documento
            // almacena "P" como proyecto y "D" como documento
            $table->string('origen', 60); 
            // Campo identificador foraneo para ambas tablas proyecto y documento
            $table->string('uuid', 60);
            $table->integer('user_id')->unsignedInteger()->comment('Solo se registra el administrador.');     
            $table->string('description', 900);
            $table->boolean('completed');
            $table->integer('order')->unsignedInteger()->comment('Registra el orden de visualización.');     
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
