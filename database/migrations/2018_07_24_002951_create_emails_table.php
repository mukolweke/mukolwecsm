<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('from_email');
            $table->string('to_email');
            $table->string('subject');
            $table->string('body');
            $table->timestamps();

//            $table->foreign('advisor_id')->references('id')->on('financial_advisors')->onDelete('cascade')->onUpdate('cascade');
//            $table->foreign('advisor_id')->references('id')->on('financial_advisors')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emails');
    }
}
