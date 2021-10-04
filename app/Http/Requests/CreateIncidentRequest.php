<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class CreateIncidentRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'nullable',
            'criticality' => 'required',
            'type' => 'required',
            'status' => 'required',
        ];
    }

    /**
     * @param Validator $validator
     * @throws ValidationException
     */
    public function failedValidation($validator)
    {
        $json = [
            'status' => 400,
            'errors' => $validator->errors()
        ];
        $response = new JsonResponse($json, 400);
        throw (new ValidationException($validator, $response))->status(400);
    }
}
