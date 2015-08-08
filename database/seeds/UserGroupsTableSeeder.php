<?php

use Illuminate\Database\Seeder;

class UserGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\UserGroups::create([
            'name' => 'Super Admin'
        ]);

        \App\UserGroups::create([
            'name' => 'Admin'
        ]);

        \App\UserGroups::create([
            'name' => 'Clinic Manager'
        ]);

        \App\UserGroups::create([
            'name' => 'Doctor'
        ]);

        \App\UserGroups::create([
            'name' => 'User'
        ]);
    }
}
