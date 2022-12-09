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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->integer('reseller_id')->nullable();
            $table->integer('user_id');
            $table->integer('status')->default(4)->comment('1=success,2=sending,3=paused,4=pending,5=failed');
            $table->string('campaign_name');
            $table->string('text_body');
            $table->integer('sms_count');
            $table->integer('mask')->default(0)->comment('1=masking,0=nonmasking');
            $table->string('sender')->nullable();
            $table->string('group_id')->default(0);
            $table->timestamp('start_date')->useCurrent = true;
            $table->timestamps();
            $table->float('campaign_cost')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('dynamic_sms')->default(0);
            $table->integer('api_sms')->nullable()->default(0);
            $table->integer('otp_sms')->nullable()->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
}
