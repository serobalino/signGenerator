<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->bigIncrements('id_re');
            $table->unsignedBigInteger('id_ca');
            $table->string("nombre_re");
            $table->string("apellido_re");
            $table->string("celular_re");
            $table->string("ext_re")->nullable();
            $table->string("email_re");
            $table->string("skype_re")->nullable();
            $table->string("linkedin_re")->nullable();
            $table->string("github_re")->nullable();
            $table->timestamps();
            $table->foreign('id_ca')->references('id_ca')->on('cargos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros', function (Blueprint $table) {
            $table->dropForeign(['id_ca']);
        });
    }
}
