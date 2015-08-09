<?php
namespace App\Espesyalista\Api\Appointment\Repositories;

use App\Espesyalista\Api\Appointment\Interfaces\AppointmentsRepoInterface;
use App\Espesyalista\Base\Repositories\EloquentRepository;
use Illuminate\Database\Eloquent\Model;

class AppointmentsRepo extends EloquentRepository implements AppointmentsRepoInterface
{
    public $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}