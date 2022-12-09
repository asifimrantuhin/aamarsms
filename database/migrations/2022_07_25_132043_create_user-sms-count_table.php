<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSmsCountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user-sms-count', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('user_id')->nullable();
            $table->dateTime('sent_date')->nullable();
            $table->float('price')->nullable();
            $table->tinyInteger('mask')->nullable();
            $table->tinyInteger('nonmask')->nullable();
            $table->tinyInteger('gp')->nullable();
            $table->tinyInteger('bl')->nullable();
            $table->tinyInteger('robi')->nullable();
            $table->tinyInteger('teletalk')->nullable();
            $table->tinyInteger('airtel')->nullable();
            $table->tinyInteger('total')->nullable();
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
        Schema::dropIfExists('user-sms-count');
    }
}
