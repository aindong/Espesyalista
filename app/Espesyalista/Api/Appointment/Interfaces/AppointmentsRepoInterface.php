<?php
namespace App\Espesyalista\Api\Appointment\Interfaces;

use App\Espesyalista\Base\Interfaces\EloquentInterface;

interface AppointmentsRepoInterface extends EloquentInterface
{
    public function getAppointmentsTodayForClinic($clinicId);
}