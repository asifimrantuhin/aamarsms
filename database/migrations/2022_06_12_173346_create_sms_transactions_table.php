<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSMSTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('reseller_id')->nullable();
            $table->integer('group_id')->nullable();
            $table->integer('campaign_id')->nullable();
            $table->integer('status')->nullable();
            $table->string('operator')->nullable();
            $table->integer('country_code')->nullable();
            $table->float('price')->nullable();
            $table->integer('sms_count')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('comments')->nullable();
            $table->string('vendor_api')->nullable();
            $table->string('smsid')->nullable();
            $table->string('text')->nullable();
            $table->float('vendor_price')->nullable();
            $table->float('sell_price')->nullable();
            $table->integer('mask')->nullable();
            $table->string('callback_url')->nullable();
            $table->integer('callback_status')->default(0); 
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
        Schema::dropIfExists('sms_transactions');
    }
}
