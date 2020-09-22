<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('link');
            $table->mediumText('description');
            $table->mediumText('terms_conditions');
            $table->float('price');
            $table->float('offer_price')->nullable();
            $table->float('percentage')->nullable();
            $table->boolean('best_seller')->default(0);
            $table->string('image');
            $table->string('bannerimage')->nullable();
            $table->boolean('showhomepage')->default(0);
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
        Schema::dropIfExists('games');
    }
}
