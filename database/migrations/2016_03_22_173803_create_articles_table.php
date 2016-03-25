<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            //define foreign key
            //$table->integer('user_id')->unsigned();
            $table->string('title');
            $table->text('body');
            $table->timestamps();
            $table->timestamp('published_at');

            //Define foreign key relationship and constraints
//            $table->foreign('user_id')
//                ->references('id')
//                ->on('users')
//                ->onDelete('cascade');
            //we do this alternatively via separate migration to save existing data
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
