<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {

        $table->id();
        $table->string('name',50);
        $table->string('phone',50)->nullable();
        $table->string('email')->nullable();
        $table->timestamps();
     

        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}