<?php

use Illuminate\Database\Seeder;

class UserPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\UserPermissions::create([
            'group_id'      => 1,
            'permission'    => '*'
        ]);

        \App\UserPermissions::create([
            'group_id'      => 2,
            'permission'    => '*'
        ]);

        \App\UserPermissions::create([
            'group_id'      => 3,
            'permission'    => 'view_appointments'
        ]);

        \App\UserPermissions::create([
            'group_id'      => 3,
            'permission'    => 'update_appointments'
        ]);

        \App\UserPermissions::create([
            'group_id'      => 3,
            'permission'    => 'create_appointments'
        ]);

        \App\UserPermissions::create([
            'group_id'      => 3,
            'permission'    => 'view_doctors'
        ]);

        \App\UserPermissions::create([
            'group_id'      => 3,
            'permission'    => 'create_doctors'
        ]);

        \App\UserPermissions::create([
            'group_id'      => 3,
            'permission'    => 'create_doctors'
        ]);

        \App\UserPermissions::create([
            'group_id'      => 5,
            'permission'    => 'create_appointments'
        ]);

        \App\UserPermissions::create([
            'group_id'      => 5,
            'permission'    => 'view_appointments'
        ]);

        \App\UserPermissions::create([
            'group_id'      => 5,
            'permission'    => 'cancel_appointments'
        ]);

        \App\UserPermissions::create([
            'group_id'      => 5,
            'permission'    => 'reschedule_appointments'
        ]);

    }
}
