<?php

use Illuminate\Database\Seeder;

class AppointmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Appointment::create([
            'clinic_id'         => 3,
            'service_id'        => 2,
            'user_id'           => 1,
            'appointment_date'  => time()
        ]);

        \App\Models\Appointment::create([
            'clinic_id'         => 2,
            'service_id'        => 1,
            'user_id'           => 2,
            'appointment_date'  => time()
        ]);

        \App\Models\Appointment::create([
            'clinic_id'         => 5,
            'service_id'        => 3,
            'user_id'           => 3,
            'appointment_date'  => time()
        ]);
    }
}
