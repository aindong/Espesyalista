<?php
namespace App\Espesyalista\Sms\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SmsDatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('App\Espesyalista\Sms\Database\Seeds\FoobarTableSeeder');
	}

}