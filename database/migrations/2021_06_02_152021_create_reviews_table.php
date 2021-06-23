<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('campaign_id')->nullable();
            $table->foreignId('product_id')->nullable();
            $table->foreignId('post_selection_id')->nullable();
            $table->foreignId('influencer_id')->nullable();
            $table->integer('qty')->nullable();
            $table->string('amount')->nullable();
            $table->foreignId('brand_id')->nullable();
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
        Schema::dropIfExists('reviews');
    }
}
