<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Settingrequest extends FormRequest
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
            //
            'title_'.config('app.locale') => 'required',
            'meta_description_'.config('app.locale') => 'required',
            'meta_keywords_'.config('app.locale') => 'required',
            'footcontent_'.config('app.locale') => 'required',
            'yandexMetrix' => 'nullable',
            'googleMetrix' => 'nullable',
            'phone' => 'nullable',
            'mobphone' => 'nullable',
            'address' => 'required',
            'email' => 'required|email:rfc,dns',
            'fb' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'youtube' => 'nullable|url',
            'logo' => 'nullable|image',
        ];
    }

    public function messages()
    {
        return [
            'title_'.config('app.locale').'.required' => 'Başlıq mütləq doldurulmalıdır !',
            'email.required' =>'Email mütləq doldurulmalıdır !',
            'email.email:rfc,dns' =>'Email doğru deyil !',
            'url' => 'link (url) daxil edin !',
        ];
    }
}
