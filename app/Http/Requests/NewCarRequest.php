<?php

namespace App\Http\Requests;

use App\Modules\Vehicle\Entities\Car;
use Illuminate\Foundation\Http\FormRequest;

class NewCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'production_year' => 'required|numeric',
            'color' => 'required',
            'price' => 'required|numeric',
            'machine' => 'required',
            'passenger_capacity' => 'required',
            'type' => 'required'
        ];
    }

    public function toEntity(): Car
    {
        $request = $this->validated();

        $car = new Car();
        $car->productionYear = $request["production_year"];
        $car->color = $request["color"];
        $car->price = $request["price"];
        $car->machine = $request["machine"];
        $car->passengerCapacity = $request["passenger_capacity"];
        $car->type = $request["type"];
        return $car;
    }
}
