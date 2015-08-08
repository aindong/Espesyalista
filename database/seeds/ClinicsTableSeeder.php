<?php

use Illuminate\Database\Seeder;

class ClinicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Clinic::create([
            'name'      => 'Philcare Makati',
            'location'  => serialize([
                'lat'       => 14.55609,
                'lon'       => 121.02189,
                'city'      => 'Makati City',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Aventus Medical Care',
            'location'  => serialize([
                'lat' => 14.5702459,
                'lon' => 121.0217766,
                'city'      => 'Makati City',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'FortMED Medical Clinic',
            'location'  => serialize([
                'lat' => 14.5630284,
                'lon' => 121.0224857,
                'city'      => 'Makati City',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Biomedix Inc',
            'location'  => serialize([
                'lat' => 14.558418,
                'lon' => 121.014383,
                'city'      => 'Makati City',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'HP Plus',
            'location'  => serialize([
                'lat' => 14.4898456,
                'lon' => 121.0397747,
                'city'      => 'Makati City',
                'country'   => 'PH'
            ])
        ]);
    }
}
