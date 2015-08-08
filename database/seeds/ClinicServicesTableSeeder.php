<?php

use Illuminate\Database\Seeder;

class ClinicServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            \App\Models\ClinicService::create([
                'clinic_id'     => $i,
                'name'          => 'Consultation',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            \App\Models\ClinicService::create([
                'clinic_id'     => $i,
                'name'          => 'Laboratory',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ]);
        }

        for ($i = 1; $i <= 2; $i++) {
            \App\Models\ClinicService::create([
                'clinic_id'     => $i,
                'name'          => 'X-ray',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ]);
        }

        for ($i = 3; $i <= 5; $i++) {
            \App\Models\ClinicService::create([
                'clinic_id'     => $i,
                'name'          => 'Ultrasound',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ]);
        }
    }
}
