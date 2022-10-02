<?php

namespace App\Http\Controllers\Vehicle;

use App\Contracts\ResponseTemplate;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewMotorRequest;
use App\Modules\Vehicle\Contracts\Responses\Mapper\MotorResponseMapper;
use App\Modules\Vehicle\Entities\Interfaces\VehicleUsecase;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    private $service;

    public function __construct(VehicleUsecase $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $data = $this->service->getAllMotor();
        $data = MotorResponseMapper::toBatchResponse($data);
        return response()->json(
            (new ResponseTemplate())->setMeta(200)->setData($data)
                ->release()
        );
    }

    public function show($vehicleID)
    {
        $data = $this->service->getMotorByID($vehicleID);
        $data = MotorResponseMapper::toResponse($data);
        return response()->json(
            (new ResponseTemplate())->setMeta(200)->setData($data)
                ->release()
        );
    }

    public function insert(NewMotorRequest $request)
    {
        $id = $this->service->addMotor($request->toEntity());
        $data = (object) ['id' => $id];
        return response()->json(
            (new ResponseTemplate())->setMeta(201)->setData($data)
                ->release()
        );
    }
}
