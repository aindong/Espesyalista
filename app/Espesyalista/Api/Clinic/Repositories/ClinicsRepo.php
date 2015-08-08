<?php
namespace App\Espesyalista\Api\Clinic\Repositories;

use App\Espesyalista\Api\Clinic\Interfaces\ClinicsRepoInterface;
use App\Espesyalista\Base\Repositories\EloquentRepository;
use Illuminate\Database\Eloquent\Model;

class ClinicsRepo extends EloquentRepository implements ClinicsRepoInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}