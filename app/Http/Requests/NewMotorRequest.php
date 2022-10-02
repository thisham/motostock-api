<?php

namespace App\Http\Requests;

use App\Modules\Vehicle\Entities\Motor;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class NewMotorRequest extends FormRequest
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
            'suspension_type' => 'required',
            'transmission_type' => 'required'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'meta' => [
                'code' => 400,
                'message' => 'Bad Request'
            ],
            'errors' => $validator->errors(),
        ], 400));
    }

    public function toEntity(): Motor
    {
        $request = $this->validated();

        $motor = new Motor();
        $motor->productionYear = $request["production_year"];
        $motor->color = $request["color"];
        $motor->price = $request["price"];
        $motor->machine = $request["machine"];
        $motor->suspensionType = $request["suspension_type"];
        $motor->transmissionType = $request["transmission_type"];
        return $motor;
    }
}
