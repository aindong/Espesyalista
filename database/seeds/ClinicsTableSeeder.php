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
            'city'      => 'Makati City',
            'location'  => serialize([
                'lat'       => 14.55609,
                'lon'       => 121.02189,
                'city'      => 'Makati City',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Aventus Medical Care',
            'city'      => 'Makati City',
            'location'  => serialize([
                'lat' => 14.5702459,
                'lon' => 121.0217766,
                'city'      => 'Makati City',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'FortMED Medical Clinic',
            'city'      => 'Makati City',
            'location'  => serialize([
                'lat' => 14.5630284,
                'lon' => 121.0224857,
                'city'      => 'Makati City',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Biomedix Inc',
            'city'      => 'Makati City',
            'location'  => serialize([
                'lat' => 14.558418,
                'lon' => 121.014383,
                'city'      => 'Makati City',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'HP Plus',
            'city'      => 'Makati City',
            'location'  => serialize([
                'lat' => 14.4898456,
                'lon' => 121.0397747,
                'city'      => 'Makati City',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Delos Santos Medical Centre',
            'city'      => 'Quezon City',
            'location'  => serialize([
                'lat' => 14.6200298,
                'lon' => 121.0175623,
                'city'      => 'Quezon City',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'AFP Medical Center. Gen V.luna',
            'city'      => 'Quezon City',
            'location'  => serialize([
                'lat' => 14.63485,
                'lon' => 121.051955,
                'city'      => 'Quezon City',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Canossa Health And Social Center',
            'city'      => 'Manila',
            'location'  => serialize([
                'lat' => 14.6235757,
                'lon' => 120.9620583,
                'city'      => 'Tondo, Manila',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Centuria Medical Makati',
            'city'      => 'Makati City',
            'location'  => serialize([
                'lat' => 14.566844,
                'lon' => 121.028749,
                'city'      => 'Makati City',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Derma 360',
            'city'      => 'Makati City',
            'location'  => serialize([
                'lat' => 14.565516,
                'lon' => 121.036438,
                'city'      => 'Estrella Street, Makati',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Asian Center for Dental Specialties',
            'city'      => 'Makati City',
            'location'  => serialize([
                'lat' => 14.554642,
                'lon' => 121.015072,
                'city'      => 'Legaspi Village 1229, Makati',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Patient First Medical Center',
            'city'      => 'Makati City',
            'location'  => serialize([
                'lat' => 14.552213,
                'lon' => 121.025712,
                'city'      => 'Parkway Dr, Makati',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Dermclinic',
            'city'      => 'Makati City',
            'location'  => serialize([
                'lat' => 14.5519936,
                'lon' => 121.0155686,
                'city'      => 'Legazpi Village, Makati',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Aventus Medical Care, Inc.',
            'city'      => 'Makati City',
            'location'  => serialize([
                'lat' => 14.5702459,
                'lon' => 121.0217766,
                'city'      => 'Legazpi, Makati',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Clarence Slimming and Dermatology Centre',
            'city'      => 'Makati City',
            'location'  => serialize([
                'lat' => 14.5587504,
                'lon' => 121.0329461,
                'city'      => '28 Jupiter, Makati',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Skin Metro Face & Body Care',
            'city'      => 'Makati City',
            'location'  => serialize([
                'lat' => 14.570218,
                'lon' => 121.0218649,
                'city'      => 'Street corner Dela Rosa Street, Legaspi Village, Makati City',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Shinagawa Lasik and Aesthetics Philippines',
            'city'      => 'Makati City',
            'location'  => serialize([
                'lat' => 14.556576,
                'lon' => 121.022229,
                'city'      => 'Paseo de Roxas, Makati',
                'country'   => 'PH'
            ])
        ]);

        \App\Models\Clinic::create([
            'name'      => 'Contours Advanced Face and Body Sculpting Institute',
            'city'      => 'Makati City',
            'location'  => serialize([
                'lat' => 14.537812,
                'lon' => 121.017451,
                'city'      => 'Paseo De Magallanes 1232, Makati',
                'country'   => 'PH'
            ])
        ]);

//        // Tarlac Clinic
//        \App\Models\Clinic::create([
//            'name'      => 'Contours Advanced Face and Body Sculpting Institute',
//            'city'      => 'Makati City',
//            'location'  => serialize([
//                'lat' => 14.537812,
//                'lon' => 121.017451,
//                'city'      => 'Paseo De Magallanes 1232, Makati',
//                'country'   => 'PH'
//            ])
//        ]);

    }
}
