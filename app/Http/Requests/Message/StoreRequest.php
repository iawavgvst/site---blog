<?php

namespace App\Http\Requests\Message;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string',
            'message' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'This field is required',
            'name.string' => 'The name should be a string',
            'email.required' => 'This field is required',
            'email.string' => 'The e-mail address should be a string',
            'message.required' => 'This field is required',
            'message.string' => 'The message should be a string',
        ];
    }
}
