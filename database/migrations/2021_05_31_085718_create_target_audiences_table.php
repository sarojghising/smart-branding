<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTargetAudiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('target_audiences', function (Blueprint $table) {
            $table->id();
            $table->enum('gender',['all','male','female'])->default('all');
            $table->string('age_specification');
            $table->string('total_followers');
            $table->string('average_engagement_per_post');
            $table->string('average_views_per_video_post');
            $table->string('locations');
            $table->string('posting_time');
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
        Schema::dropIfExists('target_audiences');
    }
}
