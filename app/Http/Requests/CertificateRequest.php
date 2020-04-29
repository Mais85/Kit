<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CertificateRequest extends FormRequest
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
            'title' => 'required|string|max:191',
            'desc_'.config('app.locale') => 'required|string|max:191',
            'img' => 'image|nullable',
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
            'title.required' => 'Müştəri adı mütləq doldurulmalıdır !',
            'title.max:191' => 'Müştəri adı maksimum 191 simvoldan ibarət ola bilər !',
            'desc_'.config('app.locale').'.required' =>'Qısa mətn mütləq doldurulmalıdır !',
            'desc_'.config('app.locale').'.max:191' =>'Qısa mətn 191 simvoldan artıq ola bilməz!',
            'img.image' => 'Yalnız şəkil seçmək olar !',
            'link.url' =>'Link düzgün deyil !',
        ];
    }
}
