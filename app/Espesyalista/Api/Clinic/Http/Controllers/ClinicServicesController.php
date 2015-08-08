<?php
namespace App\Espesyalista\Api\Clinic\Http\Controllers;

use App\Espesyalista\Api\Clinic\Interfaces\ClinicServicesRepoInterface;
use App\Espesyalista\Base\Controllers\ApiController;

class ClinicServicesController extends ApiController
{
    protected $clinicServices;

    public function __construct(ClinicServicesRepoInterface $clinicServices)
    {
        $this->clinicServices = $clinicServices;
    }

    public function index($clinicId)
    {
        $result = $this->clinicServices->getClinicServices($clinicId);

        if ($result->isEmpty())
        {
            return $this->responseNotFound();
        }

        return $this->responseOk($result);
    }

    public function show($clinicId, $id)
    {
        $result = $this->clinicServices->find($id);

        if (! $result) {
            return $this->responseNotFound();
        }

        return $this->responseOk($result);
    }

    public function store($clinicId)
    {
        $data = \Input::all();

        $result = $this->clinicServices->create($data);

        return $this->createResponse($result);
    }

    public function update($clinicId, $id)
    {
        $data = \Input::all();

        $result = $this->clinicServices->update($id, $data);

        return $this->createResponse($result);
    }

    public function destroy($id)
    {

    }
}