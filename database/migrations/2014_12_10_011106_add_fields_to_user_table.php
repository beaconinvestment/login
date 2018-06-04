<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			// add bio,gender,dob,pic,country,state,city,address,postal
            $table->text('cell_no')->nullable();
			$table->text('cnic')->nullable();
			$table->text('ref_by')->nullable();
			$table->text('bio')->nullable();
			$table->string('gender')->nullable();
			$table->date('dob')->nullable();
			$table->string('pic')->nullable();
			$table->string('country')->nullable();
			$table->string('state')->nullable();
			$table->string('city')->nullable();
			$table->string('address')->nullable();
			$table->string('postal')->nullable();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			// delete above columns
			$table->dropColumn(array('cell_no','userID','cnic','ref_by','bio', 'gender', 'dob', 'pic', 'country', 'state', 'city', 'address', 'postal'));
		});
	}

}
