<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OperationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'val1' => 'required|numeric',
            'val2' => 'required|numeric',
            'operator' => [
                'required',
                'max:255',
                function ($attribute, $value, $fail) {
                    $class_name = 'App\\Http\\Controllers\\Calc'.ucfirst($value);
                    if (!class_exists($class_name)) {
                        $fail('That operatar is invalid.');
                    }
                },
            ],
        ];
    }

    public function messages()
    {
        return [
            'val1.required' => 'Value 1 cannot be blank',
            'val1.numeric' => 'Value 1 must be a number',
            'val2.required' => 'Value 2 cannot be blank',
            'val2.numeric' => 'Value 2 must be a number',
            'operator.required' => 'Please select an operator'
        ];
    }
}
