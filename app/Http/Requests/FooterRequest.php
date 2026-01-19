<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FooterRequest extends FormRequest
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
            'description' => 'bail|required',
            'name_tr' => 'bail|required',
            'name_en' => 'bail|required',
            'address' => 'bail|required',
            'phone' => 'bail|required',
            'fax' => 'bail|required',
            'email_tr' => 'bail|required',
            'email_en' => 'bail|required',
        ];
    }
}
