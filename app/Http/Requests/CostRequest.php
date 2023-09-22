<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                'rent' => 'required|integer|min:0',
                'water_cost' => 'required|integer|min:0',
                'utilitiy_cost' => 'required|integer|min:0',
                'food_cost' => 'required|integer|min:0',
                'phone_cost' => 'required|integer|min:0',
                'other_cost' => 'required|integer|min:0',
                'total_cost' => 'required|integer|min:0',
        ];
    }
}