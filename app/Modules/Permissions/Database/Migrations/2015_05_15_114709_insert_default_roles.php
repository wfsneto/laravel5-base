<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

# Models
use App\User;
use App\Modules\Permissions\Models\Role;

class InsertDefaultRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        # Create roles default
        $dev = Role::firstOrCreate([ 'name' => 'Developer', 'slug' => 'dev' ]);
        $admin = Role::firstOrCreate([ 'name' => 'Administrator', 'slug' => 'admin' ]);
        $user = Role::firstOrCreate([ 'name' => 'User', 'slug' => 'user' ]);

        # Users default
        $this->users = [
            'dev@dev.com' => [
                'name' => 'Developer',
                'password' => Hash::make('dev'),
                'role_id' => $dev->id,
            ],

            'admin@admin.com' => [
                'name' => 'Administrator',
                'password' => Hash::make('admin'),
                'role_id' => $admin->id,
            ],

            'user@user.com' => [
                'name' => 'User',
                'password' => Hash::make('user'),
                'role_id' => $user->id,
            ],
        ];

        # Create users
        foreach ($this->users as $email => $attributtes) {
            $user = User::firstOrCreate([ 'email' => $email ]);
            $user->name = $attributtes['name'];
            $user->password = $attributtes['password'];
            $user->save();

            $user->syncRoles([ $attributtes['role_id'] ]);
        }
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
