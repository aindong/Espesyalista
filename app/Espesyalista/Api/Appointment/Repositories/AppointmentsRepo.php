<?php
namespace App\Espesyalista\Api\Appointment\Repositories;

use App\Espesyalista\Api\Appointment\Interfaces\AppointmentsRepoInterface;
use App\Espesyalista\Base\Repositories\EloquentRepository;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class AppointmentsRepo extends EloquentRepository implements AppointmentsRepoInterface
{
    public $model;
    public $today;

    public function __construct(Model $model)
    {
        $this->model = $model;

        $this->today = Carbon::today('Asia/Manila');
    }

    public function getAppointmentsTodayForClinic($clinicId)
    {
        $result = $this->model->with('service', 'user')
            ->where('clinic_id', $clinicId)
            ->get();

        return $result;
    }
}