<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('id_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_no');
            $table->string('full_name');
            $table->string('position');
            $table->string('address');
            $table->string('contact_number');
            $table->date('date_of_birth');
            $table->string('ptc_name');
            $table->string('ptc_address');
            $table->string('ptc_relationship');
            $table->string('ptc_contact_number');
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
        Schema::dropIfExists('id_datas');
    }
}
