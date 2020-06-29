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
            'title' => 'required|max:191',
            'meta_description_'.config('app.locale') => 'required',
            'meta_keywords_'.config('app.locale') => 'required',
            'footcontent_'.config('app.locale') => 'required',
            'phone'=> 'required|numeric|min:9',
            'mobphone'=> 'required|numeric|min:9',
            'address' => 'required',
            'email' => 'required|email:rfc,dns',
            'fb' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
            'youtube' => 'nullable|url',
            'logo' => 'nullable|image',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Başlıq mütləq doldurulmalıdır !',
            'email.required' =>'Email mütləq doldurulmalıdır !',
            'email.email:rfc,dns' =>'Email doğru deyil !',
            'url' => 'link (url) daxil edin !',
            'max:191' => 'Maksimum 191 simvol daxil etmək olar',
            'phone.required' => 'Telefon qeyd olunmalıdır !',
            'phone.numeric' => 'Telefon yalniz rəqəmlərdən ibarət ola bilər !',
            'phone.min' => 'Telefon  min::min  simvoldan ibarət ola bilər !',
            'mobphone.required' => 'Mob.Telefon qeyd olunmalıdır !',
            'mobphone.numeric' => 'Mob.Telefon yalniz rəqəmlərdən ibarət ola bilər !',
            'mobphone.min' => 'Mob.Telefon  min::min simvoldan ibarət ola bilər !',
        ];
    }
}
