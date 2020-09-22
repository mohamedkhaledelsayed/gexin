<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('designs');
            $table->text('description');
            $table->boolean('showabovehome')->default(0);
            $table->boolean('statusshowhome')->default(0);
            $table->string('homeimage')->nullable();
            $table->string('iconimage')->nullable();
            $table->string('sidebarimage')->nullable();
            $table->string('bannerimage')->nullable();

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
        Schema::dropIfExists('categories');
    }
}
