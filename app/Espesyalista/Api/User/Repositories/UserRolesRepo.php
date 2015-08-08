<?php
namespace App\Espesyalista\User\Repositories;

use App\Espesyalista\Base\Repositories\EloquentRepository;
use App\Espesyalista\User\Interfaces\UsersRepoInterface;
use Illuminate\Database\Eloquent\Model;

class UserRolesRepo extends EloquentRepository implements UsersRepoInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}