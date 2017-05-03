<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('title');
            $table->text('body');
            $table->string('featured_image');
            $table->string('slug');
            $table->dateTime('published_at');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('user_id');
            $table->engine = 'InnoDB';
            $table->timestamps();//dve koloni avtomatski zemaat datumi od sql koga daden zapis ke bide kreiran ili promenet
        });//nema potreba od time stamps, ne menuvaat niso, created_at	updated_at
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
