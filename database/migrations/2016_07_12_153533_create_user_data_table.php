<?php

	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class CreateUserDataTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create( 'user_data', function ( Blueprint $table ) {
				$table->increments( 'id' );
				$table->text( 'ncaa_pin' );
				$table->text( 'yb21_pin' );
				$table->text( 'first_name' );
				$table->text( 'last_name' );
				$table->text( 'phone_number' );
				$table->text( 'email' );
				$table->text( 'height' );
				$table->text( 'age' );
				$table->date( 'dob' );
				$table->enum( 'gender', [ 'male', 'female' ] );
				$table->date( 'hs_graduation_year' );
				$table->text( 'hs_name' );
				$table->text( 'GPA' );
				$table->text( 'street_address_1' );
				$table->text( 'street_address_2' );
				$table->text( 'city' );
				$table->text( 'state' );
				$table->text( 'zip' );
				$table->text( 'sat_score' );
				$table->text( 'mothers_first' );
				$table->text( 'mothers_last' );
				$table->text( 'fathers_first' );
				$table->text( 'fathers_last' );
				$table->text( 'guardians_fist' );
				$table->text( 'guardians_last' );
				$table->text( 'hs_school_coach_first' );
				$table->text( 'hs_school_coach_last' );
				$table->text( 'hs_school_phone' );
				$table->enum( 'user_type', [
					'Coach',
					'Player',
					'Program Director',
					'Event Operator',
					'Staff',
					'NCAA',
				] );
				$table->timestamps();
			} );
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {
			Schema::drop( 'user_data' );
		}
	}
