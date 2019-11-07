<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioCarouselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_carousels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('portfolio_id')->nullable()->unsigned();
            $table->foreign('portfolio_id')->references('id')->on('portfolios');
            $table->string('carousel_image')->nullable();
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
        Schema::dropIfExists('portfolio_carousels');
    }
}
