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

        \App\Models\Clinic::create([
            'name'      => 'Taguig-Pateros District Hospital',
            'location'  => serialize([
                'lat' => 14.5108532,
                'lon' => 121.0341501,
                'city'      => 'Taguig, Metro Manila',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Paranaque Premier Medical Center',
            'location'  => serialize([
                'lat' => 14.4885432,
                'lon' => 120.9930613,
                'city'      => 'Parañaque, Metro Manila',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'PNP General Hospital',
            'location'  => serialize([
                'lat' => 14.6315065,
                'lon' => 121.04531,
                'city'      => 'Quezon City, Metro Manila',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Delos Santos Medical Centre',
            'location'  => serialize([
                'lat' => 14.6200298,
                'lon' => 121.0175623,
                'city'      => 'Quezon City, Metro Manila',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'AFP Medical Center. Gen V.luna',
            'location'  => serialize([
                'lat' => 14.63485,
                'lon' => 121.051955,
                'city'      => 'Quezon City, Metro Manila',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Valenzuela General Hospital',
            'location'  => serialize([
                'lat' => 14.6897932,
                'lon' => 120.9780711,
                'city'      => 'Valenzuela, Metro Manila',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Dr. Jose Fabella Memorial Hospital',
            'location'  => serialize([
                'lat' => 14.606207,
                'lon' => 120.984143,
                'city'      => 'Manila, City of Manila',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Canossa Health And Social Center',
            'location'  => serialize([
                'lat' => 14.6235757,
                'lon' => 120.9620583,
                'city'      => 'Tondo, Manila',
                'country'   => 'PH'
            ])
        ]);
    }
}
