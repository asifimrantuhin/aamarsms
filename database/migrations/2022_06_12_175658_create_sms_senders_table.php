<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsSendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_senders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('reseller_id');
            $table->integer('group_id');
            $table->integer('campaign_id')->nullable();
            $table->string('operator')->nullable();
            $table->integer('status')->nullable();
            $table->integer('country_code')->nullable();
            $table->string('number');
            $table->string('api_text')->nullable();
            $table->string('callback_url')->nullable();
            $table->integer('callback_status')->nullable()->default(1);
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
        Schema::dropIfExists('sms_senders');
    }
}
