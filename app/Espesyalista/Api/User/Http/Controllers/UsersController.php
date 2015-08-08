<?php
namespace App\Espesyalista\Api\User\Http\Controllers;

use App\Espesyalista\Api\User\Interfaces\UsersRepoInterface;
use App\Espesyalista\Base\Controllers\ApiController;

class UsersController extends ApiController
{
    protected $user;

    public function __construct(UsersRepoInterface $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $result = $this->user->all();

        if ($result->isEmpty())
        {
            return $this->responseNotFound();
        }

        return $this->responseOk($result);
    }

    public function show($id)
    {
        $result = $this->user->find($id);

        if (! $result)
        {
            return $this->responseNotFound();
        }

        return $this->responseOk($result);
    }

    public function store()
    {
        $data = \Input::all();

        $result = $this->user->create($data);

        return $this->createResponse($result);
    }

    public function update($id)
    {
        $data = \Input::all();

        $result = $this->user->update($id, $data);

        return $this->createResponse($result);
    }

    public function destroy($id)
    {
        $result = $this->user->all();

        return $result;
    }
}