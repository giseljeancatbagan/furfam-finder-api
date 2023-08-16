<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PetStoreRequest extends FormRequest
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
            // 'species' => 'required|in:dog, cat, bird',
            // 'name' => 'required',
            // 'breed' => 'required|in:shih tzu, siberian husky, poodle, maltese, siamese, ragdoll, persian, silkie, parrot',
            // 'birthday' => 'required',
            // 'gender' => 'required|in:male,female',
            // 'size' => 'required|in:small, medium, large, giant',
            // 'description' => 'required',
            // 'availability_status' => 'required|in:available, pending, adopted',
            // 'image' => 'required',
            // 'shelter_id' => 'required',

        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Validation errors',
            'data' => $validator->errors(),
        ]));
    }
}
