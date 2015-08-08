<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserGroupsTableSeeder::class);
        $this->call(UserPermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ClinicsTableSeeder::class);
        $this->call(ClinicServicesTableSeeder::class);

        Model::reguard();
    }
}
