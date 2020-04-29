<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnersRequest extends FormRequest
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
            'name' => 'required|string|max:191',
            'logo' => 'image|nullable',
            'link' => 'url|nullable',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Müştəri adı mütləq doldurulmalıdır !',
            'name.max:191' => 'Müştəri adı maksimum 191 simvoldan ibarət ola bilər !' ,
            'logo.image' => 'Yalnız şəkil seçmək olar !',
            'link.url' =>'Link düzgün deyil !',
        ];
    }
}
