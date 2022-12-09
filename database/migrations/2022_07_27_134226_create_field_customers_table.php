<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_customers', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('sales_id');
            $table->string('cc');
            $table->string('cname');
            $table->string('caddress');
            $table->string('cperson');
            $table->string('designation');
            $table->string('email');
            $table->string('mobile');
            $table->string('requirement')->nullable();
            $table->string('proposal')->nullable();
            $table->string('priority')->nullable();
            $table->string('cfeedback');
            $table->string('cfeedback2')->nullable();
            $table->string('visiting_date');
            $table->string('followup');
            $table->string('cost')->default(0);
            $table->string('from');
            $table->string('to');
            $table->string('transaport');
            $table->string('pay_date');
            $table->string('pay_status')->default(2);
            $table->string('method');
            $table->string('trx_num');
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
        Schema::dropIfExists('field_customers');
    }
}
