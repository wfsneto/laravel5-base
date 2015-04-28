<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertDefaultRegions extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = "INSERT INTO `regions` VALUES
                (1,'N','Norte',NOW(),NOW(),NULL),
                (2,'NE','Nordeste',NOW(),NOW(),NULL),
                (3,'CO','Centro-Oeste',NOW(),NOW(),NULL),
                (4,'SE','Sudeste',NOW(),NOW(),NULL),
                (5,'S','Sul',NOW(),NOW(),NULL);";
        \DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::table('regions')->truncate();
    }

}
