<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments_comments', function (Blueprint $table) {
            $table->id();

            $table->UnsignedBigInteger('comentario');
            $table->UnsignedBigInteger('resposta');
            
            $table->foreign('comentario')
                ->references('id')
                ->on('comments');

            $table->foreign('resposta')
                ->references('id')
                ->on('comments');

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
        Schema::dropIfExists('comments_comments');
    }
}
