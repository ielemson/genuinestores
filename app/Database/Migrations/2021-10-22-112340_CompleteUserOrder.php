<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CompleteUserOrder extends Migration
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
			'user_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'auto_increment' => false,
			],
			
			'prod_id'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'qty'       => [
				'type'       => 'VARCHAR',
				'constraint' => '50',
			],
			'price'       => [
				'type'       => 'VARCHAR',
				'constraint' => '50',
			],
			'img'       => [
				'type'       => 'VARCHAR',
				'constraint' => '50',
			],
			
			'status'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			
			'created_at' => [
				'type'           => 'datetime'
			],
			'updated_at' => [
				'type'           => 'datetime'
			],
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('user_orders');
    }

    public function down()
    {
        $this->forge->createTable('user_orders');
    }
}
