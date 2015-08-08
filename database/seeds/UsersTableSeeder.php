<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'group_id'      => 3,
            'firstname'     => 'Alleo',
            'lastname'      => 'Indong',
            'middlename'    => 'Pineda',
            'email'         => 'alleo@espesyalista.com',
            'password'      => Hash::make('password')
        ]);

        \App\Models\User::create([
            'group_id'      => 5,
            'firstname'     => 'Niña Kristel',
            'lastname'      => 'Cheng',
            'middlename'    => 'Manlutac',
            'email'         => 'nkcheng@espesyalista.com',
            'password'      => Hash::make('password')
        ]);

        \App\Models\User::create([
            'group_id'      => 5,
            'firstname'     => 'Mark Wayne',
            'lastname'      => 'Pulido',
            'middlename'    => 'Tulabot',
            'email'         => 'mark@espesyalista.com',
            'password'      => Hash::make('password')
        ]);
    }
}
