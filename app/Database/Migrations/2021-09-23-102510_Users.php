<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
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
			'firstname'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'lastname'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'gender'       => [
				'type'       => 'VARCHAR',
				'constraint' => '12',
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'country' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'city' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'address' => [
				'type' => 'TEXT',
				'constraint' => '255',
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'role' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'created_at' => [
				'type'           => 'datetime'
			],
			'updated_at' => [
				'type'           => 'datetime'
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}


    

}
