<?php
namespace App\Espesyalista\Api\Clinic\Repositories;

use App\Espesyalista\Api\Clinic\Interfaces\ClinicServicesRepoInterface;
use App\Espesyalista\Base\Repositories\EloquentRepository;
use Illuminate\Database\Eloquent\Model;

class ClinicServicesRepo extends EloquentRepository implements ClinicServicesRepoInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getClinicServices($clinicId)
    {
        $result = $this->model->where('clinic_id', $clinicId)->get();

        return $result;
    }
}