<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('source');
            $table->text('description');
            $table->unsignedInteger('advisor_id');
            $table->tinyInteger('delete_status')->default(0);
            $table->timestamp('deleted_at')->default(null);
            $table->timestamps();

            $table->foreign('advisor_id')->references('id')->on('financial_advisors')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads');
    }
}
