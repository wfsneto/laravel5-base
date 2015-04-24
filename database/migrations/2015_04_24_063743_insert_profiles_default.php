<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertProfilesDefault extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$profile = new App\Models\Profile;
        $profile->name = 'Administração';
        $profile->save();

        $profile = new App\Models\Profile;
        $profile->name = 'Usuário';
        $profile->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
