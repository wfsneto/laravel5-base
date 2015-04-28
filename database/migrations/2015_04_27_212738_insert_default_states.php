<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertDefaultStates extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        $sql = "INSERT INTO `states` VALUES
                ( 1, 1, 1, 'AC', 'Acre', NOW(), NOW(), NULL),
                ( 2, 2, 1, 'AL', 'Alagoas', NOW(), NOW(), NULL),
                ( 3, 1, 1, 'AM', 'Amazonas', NOW(), NOW(), NULL),
                ( 4, 1, 1, 'AP', 'Amapá', NOW(), NOW(), NULL),
                ( 5, 2, 1, 'BA', 'Bahia', NOW(), NOW(), NULL),
                ( 6, 2, 1, 'CE', 'Ceará', NOW(), NOW(), NULL),
                ( 7, 3, 1, 'DF', 'Distrito Federal', NOW(), NOW(), NULL),
                ( 8, 4, 1, 'ES', 'Espírito Santo', NOW(), NOW(), NULL),
                ( 9, 3, 1, 'GO', 'Goiás', NOW(), NOW(), NULL),
                (10, 2, 1, 'MA', 'Maranhão', NOW(), NOW(), NULL),
                (11, 4, 1, 'MG', 'Minas Gerais', NOW(), NOW(), NULL),
                (12, 3, 1, 'MS', 'Mato Grosso do Sul', NOW(), NOW(), NULL),
                (13, 3, 1, 'MT', 'Mato Grosso', NOW(), NOW(), NULL),
                (14, 1, 1, 'PA', 'Pará', NOW(), NOW(), NULL),
                (15, 2, 1, 'PB', 'Paraíba', NOW(), NOW(), NULL),
                (16, 2, 1, 'PE', 'Pernambuco', NOW(), NOW(), NULL),
                (17, 2, 1, 'PI', 'Piauí', NOW(), NOW(), NULL),
                (18, 5, 1, 'PR', 'Paraná', NOW(), NOW(), NULL),
                (19, 4, 1, 'RJ', 'Rio de Janeiro', NOW(), NOW(), NULL),
                (20, 2, 1, 'RN', 'Rio Grande do Norte', NOW(), NOW(), NULL),
                (21, 1, 1, 'RO', 'Rondônia', NOW(), NOW(), NULL),
                (22, 1, 1, 'RR', 'Roraima', NOW(), NOW(), NULL),
                (23, 5, 1, 'RS', 'Rio Grande do Sul', NOW(), NOW(), NULL),
                (24, 5, 1, 'SC', 'Santa Catarina', NOW(), NOW(), NULL),
                (25, 2, 1, 'SE', 'Sergipe', NOW(), NOW(), NULL),
                (26, 4, 1, 'SP', 'São Paulo', NOW(), NOW(), NULL),
                (27, 1, 1, 'TO', 'Tocantins', NOW(), NOW(), NULL);";
        \DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::table('states')->truncate();
	}

}
