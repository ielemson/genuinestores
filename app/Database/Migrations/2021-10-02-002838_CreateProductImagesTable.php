<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductImagesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'prod_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => false,
			],
			'name'          => [
                'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'type'          => [
                'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			
			'created_at' => [
				'type'           => 'datetime'
			],
			'updated_at' => [
				'type'           => 'datetime'
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('images');
    }

    public function down()
    {
        $this->forge->dropTable('images');
    }
}
