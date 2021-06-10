<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rented', function (Blueprint $table) {
            $table->foreignId('user_id')
                ->on('users')
                ->constrained('users')
                ->onDelete('cascade'); 
            $table->foreignId('car_id')
                ->on('car_id')
                ->constrained('cars')
                ->onDelete('cascade');
            $table->date('DateOfRent');
            $table->date('DateOfReturn');
            $table->integer('KM');
            $table->integer('Price');
            $table->boolean('approval')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rented');
    }
}
