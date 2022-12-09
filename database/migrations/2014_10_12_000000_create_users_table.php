<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('parent_user')->default('1');
            $table->string('name');
            $table->string('representative')->nullable();
            $table->string('designation')->nullable();
            $table->string('image')->default('default.png');
            $table->string('company_image')->default('default.png');
            $table->tinyInteger('sales_person')->nullable();
            $table->string('email')->unique();
            $table->string('mobile')->nullable();
            $table->tinyInteger('role')->default('3');
            $table->string('mask')->nullable();
            $table->string('nonmasking')->nullable();
            $table->tinyInteger('base_sales')->nullable();
            $table->string('joining')->nullable();
            $table->string('remark')->nullable();
            $table->tinyInteger('created_by')->default('0');
            $table->string('api_token')->nullable();
            $table->string('domain')->default('https://panel.aamarsms.com');
            $table->tinyInteger('status')->default('0');
            $table->string('otp')->nullable();
            $table->string('operator')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
