<?php

namespace App\Http\Controllers\Vehicle;

use App\Contracts\ResponseTemplate;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewCarRequest;
use App\Modules\Vehicle\Contracts\Responses\Mapper\CarResponseMapper;
use App\Modules\Vehicle\Entities\Interfaces\VehicleUsecase;
use Illuminate\Http\Request;

class CarController extends Controller
{
    private $service;

    public function __construct(VehicleUsecase $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $data = $this->service->getAllCar();
        $data = CarResponseMapper::toBatchResponse($data);
        return response()->json(
            (new ResponseTemplate())->setMeta(200)->setData($data)
                ->release()
        );
    }

    public function show($vehicleID)
    {
        $data = $this->service->getCarByID($vehicleID);
        $data = CarResponseMapper::toResponse($data);
        return response()->json(
            (new ResponseTemplate())->setMeta(200)->setData($data)
                ->release()
        );
    }

    public function insert(NewCarRequest $request)
    {
        $id = $this->service->addCar($request->toEntity());
        $data = (object) ['id' => $id];
        return response()->json(
            (new ResponseTemplate())->setMeta(201)->setData($data)
                ->release()
        );
    }
}
