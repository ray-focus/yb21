<?php

	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class CreateHotelInformation extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create( 'hotel_information', function ( Blueprint $table ) {
				$table->increments( 'id' );
				$table->text( 'yb21_event_id' );
				$table->text( 'hotel_name' );
				$table->text( 'website_link' );
				$table->text( 'hotel_phone_num' );
				$table->decimal( 'room_price' );
				$table->timestamps();
			} );
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {
			Schema::drop( 'hotel_information' );
		}
	}
