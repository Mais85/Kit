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
            'title_'.config('app.locale') => 'required|max:191',
            'meta_description_'.config('app.locale') => 'required',
            'meta_keywords_'.config('app.locale') => 'required',
            'footcontent_'.config('app.locale') => 'required',
            'yandexMetrix' => 'nullable',
            'googleMetrix' => 'nullable',
            'phone'=> 'required|numeric|digits_between:10,12',
            'mobphone'=> 'required|numeric|digits_between:10,12',
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
            'max:191' => 'Maksimum 191 simvol daxil etmək olar',
            'phone.required' => 'Telefon qeyd olunmalıdır !',
            'phone.numeric' => 'Telefon yalniz rəqəmlərdən ibarət ola bilər !',
            'phone.digits_between' => 'Telefon  min::min   max::max simvoldan ibarət ola bilər !',
            'mobphone.required' => 'Mob.Telefon qeyd olunmalıdır !',
            'mobphone.numeric' => 'Mob.Telefon yalniz rəqəmlərdən ibarət ola bilər !',
            'mobphone.digits_between' => 'Mob.Telefon  min::min   max::max simvoldan ibarət ola bilər !',
        ];
    }
}
