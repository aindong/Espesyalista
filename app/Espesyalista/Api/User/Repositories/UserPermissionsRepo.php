<?php
namespace App\Espesyalista\Api\User\Repositories;

use App\Espesyalista\Base\Repositories\EloquentRepository;
use App\Espesyalista\Api\User\Interfaces\UserPermissionsRepoInterface;
use Illuminate\Database\Eloquent\Model;

class UserPermissionsRepo extends EloquentRepository implements UserPermissionsRepoInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}