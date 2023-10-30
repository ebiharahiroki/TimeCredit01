<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HourRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return true;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'hour.target_value' => 'required|integer|min:0',
            'hour.rent' => 'required|integer|min:0',
            'hour.water_cost' => 'required|integer|min:0',
            'hour.utilitiy_cost' => 'required|integer|min:0',
            'hour.food_cost' => 'required|integer|min:0',
            'hour.phone_cost' => 'required|integer|min:0',
            'hour.other_cost' => 'required|integer|min:0',
            'hour.income' => 'required|integer|min:0',
            'hour.hourly_wage' => 'required|integer|min:0',
        ];
    }
}
