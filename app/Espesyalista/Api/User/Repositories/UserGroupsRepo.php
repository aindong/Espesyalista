<?php
namespace App\Espesyalista\User\Repositories;

use App\Espesyalista\Base\Repositories\EloquentRepository;
use App\Espesyalista\User\Interfaces\UserGroupsRepoInterface;
use Illuminate\Database\Eloquent\Model;

class UserGroupsRepo extends EloquentRepository implements UserGroupsRepoInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}