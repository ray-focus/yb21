<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInsuranceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_insurance', function (Blueprint $table) {
            $table->increments('id');
            $table->text( 'ncaa_pin' );
            $table->text( 'yb21_pin' );
            $table->text( 'ins_comp_name' );
            $table->text( 'ins_policy_num' );
            $table->text( 'ins_group_num' );
            $table->text( 'ins_subscriber_first' );
            $table->text( 'ins_subscriber_last' );
            $table->text( 'ins_relationship_to_player' );
            $table->text( 'ins_phone' );
            $table->text( 'ins_emergency_contact_first' );
            $table->text( 'ins_emergency_contact_last' );
            $table->text( 'ins_emergency_contact_relation' );
            $table->text( 'ins_emergency_contact_phone' );
            $table->enum( 'ins_permission_to_treat' , ['yes' , 'no'] );
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
        Schema::drop('user_insurance');
    }
}
