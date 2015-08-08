<?php
namespace App\Espesyalista\Clinic\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ClinicDatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('App\Espesyalista\Clinic\Database\Seeds\FoobarTableSeeder');
	}

}