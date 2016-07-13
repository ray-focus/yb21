<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventParticipation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_particpants', function (Blueprint $table) {
            $table->increments('id');
            $table->text( 'yb21_event_id' );
            $table->text( 'yb21_trn' );
            $table->dateTime( 'registration_date' );
            $table->enum( 'payment_status', [
                'paid',
                'not paid',
            ] );
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
        Schema::drop('event_particpants');
    }
}
