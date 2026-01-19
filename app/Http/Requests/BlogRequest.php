<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class BlogRequest extends FormRequest
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
    public function rules(Request $request): array
    {
        if($request->method() == "POST"){
            return [
                "image" => "bail|nullable|image|mimes:jpg,png,jpeg|max:2048",
                "name_tr" => "bail|required|max:255",
                "name_en" => "bail|required|max:255",
                "description_tr" => "bail|required",
                "description_en" => "bail|required",
                "categories" => "bail|required"
            ];
        }elseif($request->method() == "PATCH"){
            return [
                "image" => "bail|nullable|image|mimes:jpg,png,jpeg|max:2048",
                "name_tr" => "bail|required|max:255",
                "name_en" => "bail|required|max:255",
                "description_tr" => "bail|required",
                "description_en" => "bail|required",
                "categories" => "bail|required"
            ];
        }
    }
}
