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
            'mobilenum'     => '09253072394',
            'password'      => Hash::make('password')
        ]);

        \App\Models\User::create([
            'group_id'      => 5,
            'firstname'     => 'Niña Kristel',
            'lastname'      => 'Cheng',
            'middlename'    => 'Manlutac',
            'email'         => 'nkcheng@espesyalista.com',
            'mobilenum'     => '09229357919',
            'password'      => Hash::make('password')
        ]);

        \App\Models\User::create([
            'group_id'      => 5,
            'firstname'     => 'Mark Wayne',
            'lastname'      => 'Pulido',
            'middlename'    => 'Tulabot',
            'email'         => 'mark@espesyalista.com',
            'mobilenum'     => '09124092030',
            'password'      => Hash::make('password')
        ]);
    }
}
