<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');

            $table->text( 'coach_ncaa_pin' );
            $table->text( 'yb21_trn' );
            $table->text( 'program' );
            $table->text( 'team_name' );
            $table->text( 'age_group' );
            $table->text( 'level' ); //This may need to change to an enum
            $table->text( 'type' );
            $table->text( 'state' , ['add states'] ); //
            $table->text( 'assigned_staff' );
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
        Schema::drop('teams');
    }
}
