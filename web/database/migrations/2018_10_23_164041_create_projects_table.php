<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid', 60);
            $table->integer('owner')->comment('Registra el propietario del proyecto ID del usuario.');
            $table->string('name', 300);
            $table->string('description', 1000);
            $table->date('start_date');
            $table->date('due_date');
            $table->unsignedInteger('company_id')->comment('Registra el RUT sin DV.');
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';  
            
            $table->foreign('company_id')->references('id')->on('companys');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
