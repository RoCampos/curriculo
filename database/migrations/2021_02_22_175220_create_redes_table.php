<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redes', function (Blueprint $table) {
            $table->id();


            $table->string('nome');
            $table->string('link');

            $table->UnsignedBigInteger('user_id');


            //pra indicar chave estrangeira
            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->timestamps(); //created_at //updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('redes');
    }
}
