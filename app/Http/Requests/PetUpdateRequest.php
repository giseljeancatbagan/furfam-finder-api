<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PetUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
            return [
                'species' => 'sometimes|required|in:dog, cat, bird',
                'name' => 'sometimes|required',
                'breed' => 'sometimes|required',
                'birthday' => 'sometimes|required',
                'gender' => 'sometimes|required',
                'size' => 'sometimes|required',
                'description' => 'sometimes|required',
                'availability_status' => 'sometimes|required',
                'image' => 'sometimes|required',
                'shelter_id' => 'sometimes|required',
    
            ];
    }

    protected function failedValidation(Validator$validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Validation errors',
            'data' => $validator->errors(),
        ]));
    }
}
