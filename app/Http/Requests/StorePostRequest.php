<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'title.required' => 'Sarlavha majburiy',
            'short_content.required' => 'Qisqacha bandi majburiy',
            'content.required' => 'Maqola majburiy',
            'photo.image' => 'Rasm yuklang',
        ];
    }

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
    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'short_content' => 'required',
            'content' => 'required',
            'photo' => 'nullable|image|max:2048',
        ];
    }
}
