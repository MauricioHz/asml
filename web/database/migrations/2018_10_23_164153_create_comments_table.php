<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');       
            // Corresponde la tabla de origen proyecto o documento
            // almacena "P" como proyecto y "D" como documento
            $table->string('origen', 60); 
            // Campo identificador foraneo para ambas tablas proyecto y documento
            $table->string('uuid', 60);            
            $table->integer('document_id')->unsignedInteger();
            $table->unsignedInteger('user_id');     
            $table->string('description', 900);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
