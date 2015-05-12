<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertDefaultRoles extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = "INSERT INTO `roles` VALUES
                (1,'Administrador','admin',NULL,NOW(),NOW()),
                (2,'Empresa','company',NULL,NOW(),NOW()),
                (3,'Veículo','vehicle',NULL,NOW(),NOW());";
        \DB::statement($sql);

        $sql = "TRUNCATE `users`;";
        \DB::statement($sql);

        $sql = "INSERT INTO `users` VALUES (1, 'Administrador', 'admin@admin.com', '\$2y\$10\$rWWJ8zv30KBySdit9ERyjO84B/J7GWg2Yfm8ulhEb6C0.rnjt/ekO', NULL, NOW(), NOW(), NULL);";
        \DB::statement($sql);

        $sql = "INSERT INTO `role_user` VALUES (1,1,1, NOW(), NOW());";
        \DB::statement($sql);




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::table('roles')->truncate();
    }

}
