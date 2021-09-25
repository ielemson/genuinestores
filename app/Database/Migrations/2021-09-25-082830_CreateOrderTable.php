<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrderTable extends Migration
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
			'user_id'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'product_id'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'order_no'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'qty'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'status'       => [
				'type'       => 'INT',
				'constraint' => 11,
			],
			
			'created_at' => [
				'type'           => 'datetime'
			],
			'updated_at' => [
				'type'           => 'datetime'
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('orders');
    }

    public function down()
    {
        $this->forge->dropTable('orders');
    }
}
