<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' => 'required|string|max:200',
            // 'slug' => 'required|string|max:255',
            'summary' => 'nullable|string',
        ];
    }

    public function messages(){
        return [
            "name.required" => "Il nome del progetto è obbligatorio",
            "name.max" => "Il nome del progetto deve essere lungo al massimo :max caratteri",
            "slug.required" => "lo slug del progetto è obbligatorio",
            "slug.max" => "lo slug del progetto deve essere lungo al massimo :max caratteri"
        ];
    }
}
