<?php
namespace App\Espesyalista\Api\Clinic\Http\Controllers;

use App\Espesyalista\Api\Clinic\Interfaces\ClinicsRepoInterface;
use App\Espesyalista\Base\Controllers\ApiController;

class ClinicsController extends ApiController
{
    protected $clinic;

    public function __construct(ClinicsRepoInterface $clinic)
    {
        $this->clinic = $clinic;
    }

    public function index()
    {
        $result = $this->clinic->all();

        if ($result->isEmpty())
        {
            return $this->responseNotFound();
        }

        return $this->responseOk($result);
    }

    public function show($id)
    {
        $result = $this->clinic->find($id);

        if (! $result) {
            return $this->responseNotFound();
        }

        return $this->responseOk($result);
    }

    public function store($id)
    {
        $data = \Input::all();

        $result = $this->clinic->create($data);

        return $this->createResponse($result);
    }

    public function update($id)
    {
        $data = \Input::all();

        $result = $this->clinic->update($id, $data);

        return $this->createResponse($result);
    }

    public function destroy($id)
    {

    }
}