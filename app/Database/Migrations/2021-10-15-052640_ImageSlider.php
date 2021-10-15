<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ImageSlider extends Migration
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
			
			'slider1'          => [
                'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'slider2'          => [
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
		$this->forge->createTable('sliders');
    }

    public function down()
    {
        $this->forge->dropTable('sliders');
    }
}
