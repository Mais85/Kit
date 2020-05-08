<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectUpdateRequest extends FormRequest
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
            'title1_'.config('app.locale') => 'required|string|max:191',
            'title2_'.config('app.locale') => 'required|string|max:191',
            'catname_'.config('app.locale') => 'required|string|max:191',
            'desc_'.config('app.locale') => 'required|string',
            'contents1_'.config('app.locale') => 'required|string',
            'contents2_'.config('app.locale') => 'required|string',
            'email'=> 'required|email:rfc,dns',
            'mobphone'=> 'required|numeric|digits_between:10,12',
            'link'=> 'nullable|url',
            'img1'=> 'nullable|image',
            'img2'=> 'nullable|image',
            'projectdate' => 'nullable|date',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     * @return array
     */
    public function messages()
    {
        return [
            'title1_'.config('app.locale').'.required' => 'Layihə adı mütləq doldurulmalıdır !',
            'title2_'.config('app.locale').'.required' => 'Başlıq 2  mütləq doldurulmalıdır !',
            'catname_'.config('app.locale').'.max' => 'Layihə kateqoriyası 191 simvoldan artıq ola bilməz !',
            'catname_'.config('app.locale').'.required' => 'Layihə kateqoriyası mütləq doldurulmalıdır !',
            'desc_'.config('app.locale').'.required' => 'Kontakt mətni mütləq doldurulmalıdır !',
            'contents1_'.config('app.locale').'.required' => 'Kontakt mətni mütləq doldurulmalıdır !',
            'contents2_'.config('app.locale').'.required' => 'Kontakt mətni mütləq doldurulmalıdır !',
            'email.required' => 'Email mütləq doldurulmalıdır',
            'email.email' => 'Email düzgün deyil !',
            'email.email:rfc,dns:' => 'Email düzgün deyil !',
            'mobphone.required' => 'Mob.Telefon qeyd olunmalıdır !',
            'mobphone.numeric' => 'Mob.Telefon yalniz rəqəmlərdən ibarət ola bilər !',
            'mobphone.digits_between' => 'Mob.Telefon  min::min   max::max simvoldan ibarət ola bilər !',
            'link.url' => 'Url adress düzgün qeyd olunmalıdır !',
            'img1.image'  => 'Şəkil 1 seçin !',
            'img2.image'  => 'Şəkil 2 seçin !',
        ];
    }
}
