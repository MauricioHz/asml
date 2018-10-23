<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid', 60);
            $table->string('name', 20)->comment('Nombre del documento.');
            $table->string('size', 900);            
            $table->integer('bytes');
            $table->string('extension', 20);
            $table->string('mime_type', 100);
            $table->string('description', 900);            
            $table->string('status', 20)->comment('Registra en proceso o terminado.');
            $table->string('autor', 100);
            $table->integer('user_id')->unsignedInteger()->comment('Registra el ID del usuario como autor.');
            $table->char('validated', 100)->comment('Registra S como afirmativo N como negativo.');
            $table->string('version', 20)->comment('Una vez que tenga estado terminado se genera una version.');
            $table->integer('company_id')->unsignedInteger()->comment('Registra el RUT sin DV.');
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
        Schema::dropIfExists('documents');
    }
}
