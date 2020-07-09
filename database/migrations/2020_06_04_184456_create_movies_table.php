<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->integer('year');
            $table->string('country');
            $table->string('code');
            $table->string('type');
            $table->string('size');
            $table->boolean('action')->default(false);
            $table->boolean('adults')->default(false);
            $table->boolean('animation')->default(false);
            $table->boolean('adventure')->default(false);
            $table->boolean('biography')->default(false);
            $table->boolean('comedy')->default(false);
            $table->boolean('crime')->default(false);
            $table->boolean('drama')->default(false);
            $table->boolean('fantasy')->default(false);
            $table->boolean('historical')->default(false);
            $table->boolean('horror')->default(false);
            $table->boolean('roma')->default(false);
            $table->boolean('romance')->default(false);
            $table->boolean('scifi')->default(false);
            $table->boolean('sport')->default(false);
            $table->boolean('thriller')->default(false);
            $table->boolean('war')->default(false);
            $table->longText('description');
            $table->string('photo');
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
        Schema::dropIfExists('movies');
    }
}
