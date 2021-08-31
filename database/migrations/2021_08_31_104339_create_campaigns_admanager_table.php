<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asb_campaigns_admanager', function (Blueprint $table) {
            $table->id('campaign_admanager_id');
            $table->integer('campaign_id');
            $table->string('campaign_admanager_name');
            $table->date('campaign_admanager_start_date');
            $table->date('campaign_admanager_end_date');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asb_campaigns_admanager');
    }
}
