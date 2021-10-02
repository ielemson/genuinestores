<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductTable extends Migration
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
			'name'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'slug'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'cprice'       => [
				'type'       => 'VARCHAR',
				'constraint' => '12',
			],
			'sprice'       => [
				'type'       => 'VARCHAR',
				'constraint' => '12',
			],
			'qty'       => [
				'type'       => 'VARCHAR',
				'constraint' => '12',
			],
			'cat_id' => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'status' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'coverimage' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'description' => [
				'type' => 'VARCHAR',
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
		$this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
