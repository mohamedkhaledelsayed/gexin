<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('BestsellerGame')->default(0);
            $table->boolean('BestsellerProduct')->default(0);
            $table->boolean('LastNews')->default(0);
            $table->boolean('categories')->default(0);
            $table->boolean('CategoryGame')->default(0);
            $table->boolean('CategoryProduct')->default(0);
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
        Schema::dropIfExists('settings');
    }
}
