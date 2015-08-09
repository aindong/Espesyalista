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
        \App\Models\UserGroup::create([
            'name' => 'Super Admin'
        ]);

        \App\Models\UserGroup::create([
            'name' => 'Admin'
        ]);

        \App\Models\UserGroup::create([
            'name' => 'Clinic Manager'
        ]);

        \App\Models\UserGroup::create([
            'name' => 'Doctor'
        ]);

        \App\Models\UserGroup::create([
            'name' => 'User'
        ]);
    }
}
