<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('sales_id')->nullable();
            $table->string('cus_code')->nullable();
            $table->string('com_name')->nullable();
            $table->string('com_add')->nullable();
            $table->string('auth_person')->nullable();
            $table->string('auth_designation')->nullable();
            $table->string('auth_email')->unique()->nullable();
            $table->string('auth_phone')->uniqid()->nullable();
            $table->string('requirement')->nullable();
            $table->string('proposal')->nullable();
            $table->string('priority')->nullable();
            $table->string('feed_first')->nullable();
            $table->string('feed_second')->nullable();
            $table->string('visiting_date')->nullable();
            $table->string('followup_date')->nullable();
            $table->string('cost')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('transport')->nullable();
            $table->string('paid_date')->nullable();
            $table->tinyInteger('paid_status')->default('0');
            $table->string('method')->nullable();
            $table->string('trx_num')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
