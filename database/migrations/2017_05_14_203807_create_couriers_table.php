<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::beginTransaction();
        Schema::create('couriers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('addr');
            $table->bigInteger('phone');
            $table->integer('age');
            $table->integer('substation_id')->unsigned();
            $table->timestamps();
            $table->foreign('substation_id')
                        ->references('id')->on('substations')
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
        Schema::dropIfExists('couriers');
    }
}
