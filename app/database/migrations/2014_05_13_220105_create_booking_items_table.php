<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingItemsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('booking_items', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('booking_id');
            $table->integer('hostel_id');
            $table->date('arrival_date');
            $table->integer('nights_stay');
            $table->integer('total_guests');
            $table->integer('snr_male_guests');
            $table->integer('snr_female_guests');
            $table->integer('jr_male_guests');
            $table->integer('jr_female_guests');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('booking_items');
    }

}