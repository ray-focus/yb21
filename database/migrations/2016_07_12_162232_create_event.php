<?php

	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class CreateEvent extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create( 'events', function ( Blueprint $table ) {
				$table->increments( 'id' );
				$table->text( 'yb21_eo_pin' );
				$table->text( 'yb21_event_id' );
				$table->text( 'event_name' );
				$table->date( 'start_date' );
				$table->date( 'end_date' );
				$table->text( 'location_city' );
				$table->text( 'state' );
				$table->text( 'event_phone' );
				$table->text( 'number_of_sites' );
				$table->decimal( 'price' );
				$table->decimal( 'special_pricing' );
				$table->enum( 'overnight_stay_required', [
					'yes',
					'no',
				] );
				$table->enum( 'ncaa_event', [
					'yes',
					'no',
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
			Schema::drop( 'events' );
		}
	}
