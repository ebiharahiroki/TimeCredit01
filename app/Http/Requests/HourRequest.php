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
    public function authorize()
    {
        return true;
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                'target_value' => 'required|integer|min:0',
                'rent' => 'required|integer|min:0',
                'water_cost' => 'required|integer|min:0',
                'utilitiy_cost' => 'required|integer|min:0',
                'food_cost' => 'required|integer|min:0',
                'phone_cost' => 'required|integer|min:0',
                'other_cost' => 'required|integer|min:0',
                'income' => 'required|integer|min:0',
                'hourly_wage' => 'required|integer|min:0',
        ];
    }
}
