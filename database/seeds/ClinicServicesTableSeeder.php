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
        for ($i = 1; $i <= 13; $i++) {
            \App\Models\ClinicService::create([
                'clinic_id'     => $i,
                'name'          => 'Consultation',
                'description'   => 'Deliberation of two or more health care professionals about diagnosis or treatment in a particular case.'
            ]);
        }

        for ($i = 1; $i <= 13; $i++) {
            \App\Models\ClinicService::create([
                'clinic_id'     => $i,
                'name'          => 'Laboratory',
                'description'   => 'Tests are done on clinical specimens in order to get information about the health of a patient as pertaining to the diagnosis, treatment, and prevention of disease.'
            ]);
        }

        for ($i = 1; $i <= 9; $i++) {
            \App\Models\ClinicService::create([
                'clinic_id'     => $i,
                'name'          => 'X-ray',
                'description'   => 'X-rays are a type of electromagnetic radiation, just like visible light. An x-ray machine sends individual x-ray particles through the body.'
            ]);
        }

        for ($i = 3; $i <= 13; $i++) {
            \App\Models\ClinicService::create([
                'clinic_id'     => $i,
                'name'          => 'Ultrasound',
                'description'   => 'Ultrasound is a type of imaging. It uses high-frequency sound waves to look at organs and structures inside the body.'
            ]);
        }

        for ($i = 3; $i <= 13; $i=$i+2) {
            \App\Models\ClinicService::create([
                'clinic_id'     => $i,
                'name'          => 'Colon Polypectomy',
                'description'   => 'A colon polypectomy is the removal of polyps from the inside lining of the colon, also called the large intestine.'
            ]);
        }

        for ($i = 3; $i <= 13; $i=$i+3) {
            \App\Models\ClinicService::create([
                'clinic_id'     => $i,
                'name'          => 'Removal of ingrown nail',
                'description'   => 'Partial removal of the nail or an offending piece of nail.'
            ]);
        }

        for ($i = 3; $i <= 13; $i=$i+4) {
            \App\Models\ClinicService::create([
                'clinic_id'     => $i,
                'name'          => 'Microscopy',
                'description'   => 'Microscopy is the technical field of using microscopes to view objects and areas of objects that cannot be seen with the naked eye.'
            ]);
        }
    }
}
