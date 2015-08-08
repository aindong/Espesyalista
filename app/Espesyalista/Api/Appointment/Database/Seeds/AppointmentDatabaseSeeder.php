<?php
namespace App\Espesyalista\Appointment\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AppointmentDatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('App\Espesyalista\Appointment\Database\Seeds\FoobarTableSeeder');
	}

}