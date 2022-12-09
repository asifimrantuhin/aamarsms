<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sms', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('reseller_id');
            $table->string('sent_date');
            $table->string('mask')->default(0);
            $table->string('non_mask')->default(0);
            $table->string('gp')->default(0);
            $table->string('bl')->default(0);
            $table->string('robi')->default(0);
            $table->string('teletalk')->default(0);
            $table->string('airtel')->default(0);
            $table->string('price')->default(0);
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
        Schema::dropIfExists('user_sms');
    }
}
