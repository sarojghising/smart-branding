<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostSelectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_selections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('influencer_id');
            $table->foreignId('campaign_id');
            $table->foreignId('product_service_id');
            $table->string('campaign_cost'); // rate
            $table->string('estimated_impression');
            $table->string('cost_per_impression');
            $table->string('post_type'); // post type
            $table->string('no_of_post'); // qty
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
        Schema::dropIfExists('post_selections');
    }
}
