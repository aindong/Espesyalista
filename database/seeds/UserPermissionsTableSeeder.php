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
        \App\Models\UserPermission::create([
            'group_id'      => 1,
            'permission'    => '*'
        ]);

        \App\Models\UserPermission::create([
            'group_id'      => 2,
            'permission'    => '*'
        ]);

        \App\Models\UserPermission::create([
            'group_id'      => 3,
            'permission'    => 'view_appointments'
        ]);

        \App\Models\UserPermission::create([
            'group_id'      => 3,
            'permission'    => 'update_appointments'
        ]);

        \App\Models\UserPermission::create([
            'group_id'      => 3,
            'permission'    => 'create_appointments'
        ]);

        \App\Models\UserPermission::create([
            'group_id'      => 3,
            'permission'    => 'view_doctors'
        ]);

        \App\Models\UserPermission::create([
            'group_id'      => 3,
            'permission'    => 'create_doctors'
        ]);

        \App\Models\UserPermission::create([
            'group_id'      => 3,
            'permission'    => 'create_doctors'
        ]);

        \App\Models\UserPermission::create([
            'group_id'      => 5,
            'permission'    => 'create_appointments'
        ]);

        \App\Models\UserPermission::create([
            'group_id'      => 5,
            'permission'    => 'view_appointments'
        ]);

        \App\Models\UserPermission::create([
            'group_id'      => 5,
            'permission'    => 'cancel_appointments'
        ]);

        \App\Models\UserPermission::create([
            'group_id'      => 5,
            'permission'    => 'reschedule_appointments'
        ]);

    }
}
