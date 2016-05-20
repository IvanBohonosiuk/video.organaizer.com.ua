<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->string('title');
            $table->text('description');
            $table->text('film_code');
            $table->string('url');
            $table->string('meta_k');
            $table->text('meta_d');
            $table->string('img');
            $table->integer('categories_id');
            $table->integer('types_id');
            $table->integer('yers');
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
        Schema::drop('videos');
    }
}
