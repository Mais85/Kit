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
            'phone'=> 'required|min:9',
            'shortphone'=> 'min:3',
            'mobphone'=> 'required_without:mobphone2|min:9',
            'mobphone2'=> 'required_without:mobphone|min:9',
            'address' => 'required',
            'email' => 'required_without:email2|email:rfc,dns',
            'email2' => 'required_without:email|email:rfc,dns',
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
            'email.required_without' =>'Email mütləq doldurulmalıdır !',
            'email2.required_without' =>'Email 2 mütləq doldurulmalıdır !',
            'email.email:rfc,dns' =>'Email doğru deyil !',
            'email2.email:rfc,dns' =>'Email doğru deyil !',
            'url' => 'link (url) daxil edin !',
            'max:191' => 'Maksimum 191 simvol daxil etmək olar',
            'phone.required' => 'Telefon qeyd olunmalıdır !',
            'phone.min' => 'Telefon  min::min  simvoldan ibarət ola bilər !',
            'shortphone.min' => 'Qısa nömrə  min::min  simvoldan ibarət ola bilər !',
            'mobphone.required_without' => 'Mob.Telefon  qeyd olunmalıdır !',
            'mobphone2.required_without' => 'Mob.Telefon 2 qeyd olunmalıdır !',
            'mobphone.min' => 'Mob.Telefon  min::min simvoldan ibarət ola bilər !',
            'mobphone2.min' => 'Mob.Telefon  min::min simvoldan ibarət ola bilər !',
        ];
    }
}
