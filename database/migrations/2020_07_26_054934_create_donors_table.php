<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sex');
            $table->text('address');
            $table->string('mobile')->unique();
            $table->decimal('amount', 10, 2);
            $table->date('date');
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
        Schema::dropIfExists('donors');
    }
}
