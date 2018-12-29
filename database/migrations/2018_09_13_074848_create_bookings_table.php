<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('piklocation');
            $table->string('piktime')->nullable();
            $table->string('droplocation');
            $table->string('date');
            $table->string('days');
            $table->string('vtype');
            $table->string('fname');
            $table->string('lname');
            $table->string('nic');
            $table->string('email');
            $table->string('address1');
            $table->string('address2');
            $table->string('vehicle_id');
            $table->string('driver_id');
            $table->timestamps();

            $table->foreign('vehicle_id')
                    ->references('id')
                    ->on('vehicles');

            $table->foreign('driver_id')
                    ->references('id')
                    ->on('drivers');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
