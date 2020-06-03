<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePractical extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practical', function (Blueprint $table) {
            $table->integer('bookid')->autoIncrement();
            $table->integer('authorid')->default(0);
            $table->string('title',55);
            $table->string('ISBN',25);
            $table->SmallInteger('pub_year')->default(0);
            $table->TinyInteger('available');
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
        Schema::dropIfExists('practical');
    }
}
