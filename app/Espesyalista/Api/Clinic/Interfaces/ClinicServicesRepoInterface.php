<?php
namespace App\Espesyalista\Api\Clinic\Interfaces;

use App\Espesyalista\Base\Interfaces\EloquentInterface;

interface ClinicServicesRepoInterface extends EloquentInterface
{
    public function getClinicServices($clinicId);
}