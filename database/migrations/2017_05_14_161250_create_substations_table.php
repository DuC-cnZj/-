<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubstationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::beginTransaction();
        Schema::create('substations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('addr');
            $table->bigInteger('phone');
            $table->string('email');
            $table->string('description');
            $table->integer('sub_company_id')->unsigned();
            $table->timestamps();
            $table->foreign('sub_company_id')
                        ->references('id')->on('sub_companies')
                        ->onDelete('cascade');
        });
        DB::commit();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('substations');
    }
}
