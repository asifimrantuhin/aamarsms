<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRechargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recharges', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();             // Relationship use korte hole integer korte hobe.
            $table->integer('sales_id')->nullable();              // Relationship use korte hole integer korte hobe.
            $table->integer('reseller_id')->nullable();              // Relationship use korte hole integer korte hobe.
            $table->string('campaign_id')->nullable();             // Relationship use korte hole integer korte hobe.
            $table->string('amount');
            $table->string('balance')->nullable();
            $table->string('comments');
            $table->string('type')->nullable();
            $table->string('recharged_by')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('trx_id')->nullable();
            $table->string('status')->default(1);
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
        Schema::dropIfExists('recharges');
    }
}
