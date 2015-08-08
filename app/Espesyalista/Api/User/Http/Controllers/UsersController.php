<?php
namespace App\Espesyalista\User;

use App\Espesyalista\Base\Controllers\ApiController;
use App\Espesyalista\User\Interfaces\UsersRepoInterface;

class UsersController extends ApiController
{
    protected $user;

    public function __construct(UsersRepoInterface $user)
    {
        $this->user = $user;
    }
}