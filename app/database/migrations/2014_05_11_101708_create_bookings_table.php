<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('bookings', function(Blueprint $table) {
            $table->increments('id');
            $table->string('order_id', 255);
            $table->dateTime('booking_date');
            $table->string('first_name', 64);
            $table->string('last_name', 64);
            $table->string('email', 64);
            $table->date('date_of_birth');
            $table->string('address_line_1', 255);
            $table->string('address_line_2', 255);
            $table->string('town_city', 255);
            $table->string('state_county', 255);
            $table->integer('country_id');
            $table->string('post_code', 32);
            $table->string('phone_1', 64);
            $table->string('phone_2', 64);
            $table->integer('member');
            $table->string('membership_number', 255);
            $table->integer('member_signup');
            $table->integer('member_type');
            $table->text('comments');
            $table->text('requests');
            $table->integer('status');
            $table->string('who_added', 25);
            $table->string('source', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('bookings');
    }

}
