<?php
namespace App\Espesyalista\Api\Appointment\Http\Controllers;

use App\Espesyalista\Api\Appointment\Interfaces\AppointmentsRepoInterface;
use App\Espesyalista\Base\Controllers\ApiController;
use App\Events\UserBooked;

class AppointmentsController extends ApiController
{
    protected $appointment;

    public function __construct(AppointmentsRepoInterface $appointment)
    {
        $this->appointment = $appointment;
    }

    public function index()
    {
        $result = $this->appointment->all();

        if ($result->isEmpty())
        {
            return $this->responseNotFound();
        }

        return $this->responseOk($result);
    }

    public function getClinicAppointmentsToday($clinicId)
    {
        $result = $this->appointment->getAppointmentsTodayForClinic($clinicId);

        if ($result->isEmpty())
        {
            return $this->responseNotFound();
        }

        return $this->responseOk($result);
    }

    public function show($id)
    {
        $result = $this->appointment->find($id);

        if (! $result) {
            return $this->responseNotFound();
        }

        return $this->responseOk($result);
    }

    public function store()
    {
        $data = \Input::all();

        // Fire user booked
        event(new UserBooked($data));exit;

        $result = $this->appointment->create($data);

        return $this->createResponse($result);
    }

    public function update($id)
    {
        $data = \Input::all();

        $result = $this->appointment->update($id, $data);

        return $this->createResponse($result);
    }

    public function destroy($id)
    {

    }
}