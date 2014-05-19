<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('events', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('eventtype_id');
            $table->integer('hostel');
            $table->integer('county');
            $table->date('date_from');
            $table->date('date_to');
            $table->text('details');
            $table->timestamps();
            $table->engine = 'MyISAM';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('events');
    }

}
