<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roster', function (Blueprint $table) {
            $table->increments('id');
            $table->text( 'yb21_trn' );
            $table->text( 'yb21_coach_pin' );
            $table->text( 'yb21_player_pin' );
            $table->text( 'ncaa_coach_pin' );
            $table->text( 'ncaa_player_pin' );
            $table->enum( 'active_status', [
                'active',
                'inactive',
            ] );
            $table->date( 'date_registered' );
            $table->date( 'date_removed' );
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
        Schema::drop('roster');
    }
}
