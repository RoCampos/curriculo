<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencias', function (Blueprint $table) {

            $table->id(); //primary key
            $table->string('funcao');
            $table->string('empresa');
            $table->date('inicio');
            $table->date('fim')->nullable();

            //chave estrangeira para id de curriculo
            $table->UnsignedBigInteger('curriculo_id');

            $table->foreign('curriculo_id')
                ->references('id')
                ->on('curriculos');

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
        Schema::dropIfExists('experiencias');
    }
}
