<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\Users;

class UserSeeder extends Seeder
{
    public function run()
	{
		$user_object = new Users();

		$user_object->insertBatch([
			[
				"firstname" => "Ifeanyi",
				"lastname" => "Elemson",
				"gender" => "male",
				"email" => "admin@genuinestores.com",
				"city" => "Lagos",
				"address" => "Lagos Nigeria",
				"country" => "Nigeria",
				"role" => "admin",
				"password" => password_hash("admin-1234", PASSWORD_DEFAULT)
			],
			
		]);
	}
}
