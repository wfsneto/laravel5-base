<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertUserAdmin extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$profile = App\Models\Profile::firstOrCreate([ 'name' => 'Administração' ]);

        $user = new App\User;
        $user->profile_id = $profile->id;
        $user->name = 'Administrador';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('admin');
        $user->save();
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
