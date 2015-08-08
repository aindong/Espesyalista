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

        \App\Models\User::create([
            'group_id'      => 5,
            'firstname'     => 'Christopher',
            'lastname'      => 'Gosselin',
            'middlename'    => 'Hulabot',
            'email'         => 'chris@gosselin.com',
            'mobilenum'     => '09124092030',
            'password'      => Hash::make('password')
        ]);

        \App\Models\User::create([
            'group_id'      => 5,
            'firstname'     => 'Brielle',
            'lastname'      => 'Williamson',
            'middlename'    => 'Caesar',
            'email'         => 'brielle@williamson.com',
            'mobilenum'     => '09124092030',
            'password'      => Hash::make('password')
        ]);

        \App\Models\User::create([
            'group_id'      => 5,
            'firstname'     => 'Cara',
            'lastname'      => 'Stevens',
            'middlename'    => 'Cox',
            'email'         => 'carstev@cox.com',
            'mobilenum'     => '09124092030',
            'password'      => Hash::make('password')
        ]);

        \App\Models\User::create([
            'group_id'      => 5,
            'firstname'     => 'Airi',
            'lastname'      => 'Satou',
            'middlename'    => 'Ken',
            'email'         => 'airi@satouken.com',
            'mobilenum'     => '09124092030',
            'password'      => Hash::make('password')
        ]);

        \App\Models\User::create([
            'group_id'      => 5,
            'firstname'     => 'Finn',
            'lastname'      => 'Camacho',
            'middlename'    => 'Winters',
            'email'         => 'finn@winters.com',
            'mobilenum'     => '09124092030',
            'password'      => Hash::make('password')
        ]);

        \App\Models\User::create([
            'group_id'      => 5,
            'firstname'     => 'Michelle',
            'lastname'      => 'House',
            'middlename'    => 'Liang',
            'email'         => 'michelle@liang.com',
            'mobilenum'     => '09124092030',
            'password'      => Hash::make('password')
        ]);

        \App\Models\User::create([
            'group_id'      => 5,
            'firstname'     => 'Jonas',
            'lastname'      => 'Alexander',
            'middlename'    => 'Greer',
            'email'         => 'jonas@alexander.com',
            'mobilenum'     => '09124092030',
            'password'      => Hash::make('password')
        ]);

        \App\Models\User::create([
            'group_id'      => 5,
            'firstname'     => 'Sonya',
            'lastname'      => 'Frost',
            'middlename'    => 'Fitzpatrick',
            'email'         => 'fitzpatrick@frost.com',
            'mobilenum'     => '09124092030',
            'password'      => Hash::make('password')
        ]);

        \App\Models\User::create([
            'group_id'      => 5,
            'firstname'     => 'Quinn',
            'lastname'      => 'Flynn',
            'middlename'    => 'Davidson',
            'email'         => 'flynn@quinn.com',
            'mobilenum'     => '09124092030',
            'password'      => Hash::make('password')
        ]);
    }
}
