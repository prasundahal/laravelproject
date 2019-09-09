<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('particulars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('suplier_id');
            $table->string('particulars');
            $table->string('quantity');
            $table->string('rateperunit');
            $table->string('piece');
            $table->string('amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('particulars');
    }
}
