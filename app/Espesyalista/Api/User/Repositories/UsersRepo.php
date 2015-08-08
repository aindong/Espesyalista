<?php
namespace App\Espesyalista\Api\User\Repositories;

use App\Espesyalista\Base\Repositories\EloquentRepository;
use App\Espesyalista\Api\User\Interfaces\UsersRepoInterface;
use Illuminate\Database\Eloquent\Model;

class UsersRepo extends EloquentRepository implements UsersRepoInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}