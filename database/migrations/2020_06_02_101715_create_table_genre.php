<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGenre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_genre', function (Blueprint $table) {
            $table->string('name');
            $table->string('Description');
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
        Schema::dropIfExists('table_genre');
    }
}
//$table->increments('bookid');
//$table->integer('authorid',10);
//$table->string('title',55);
//$table->string('ISBN',25);
//$table->unsignedSmallInteger('pub_year');
//$table->unsignedTinyInteger('available');
//$table->timestamps();
