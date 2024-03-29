<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Companycreaterequest extends FormRequest
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
            'company' => 'required|unique:companies,company|string|max:191',
            'contents_'.config('app.locale') => 'required|string',
            'contacttext_'.config('app.locale') => 'required|string|max:600',
            'email'=> 'required|email:rfc,dns',
            'address'=> 'required',
            'phone'=> 'required|numeric|digits_between:10,12',
            'mobphone'=> 'required|numeric|digits_between:10,12',
            'fb'=> 'nullable|url',
            'twitter'=> 'nullable|url',
            'instagram'=> 'nullable|url',
            'youtube'=> 'nullable|url',
            'pdf'=> 'nullable|file',
            'img1'=> 'nullable|image',
            'img2'=> 'nullable|image',
            'logo'=> 'nullable|image',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     * @return array
     */
    public function messages()
    {
        return [
            'company.required' => 'Şirkət adı mütləq doldurulmalıdır !',
            'company.unique' => 'Şirkət adı unikal olmalıdır !',
            'company.max:191' => 'Maksimum 191 simvol daxil etmək olar !',
            'contents_'.config('app.locale').'.required' => 'Mətn mütləq doldurulmalıdır !',
            'contacttext_'.config('app.locale').'.required' => 'Kontakt mətni mütləq doldurulmalıdır !',
            'contacttext_'.config('app.locale').'.max' => 'Hər dil üzrə maksimum 191 simvol daxil etmək olar !',
            'email.required' => 'Email mütləq doldurulmalıdır',
            'email.email' => 'Email düzgün deyil !',
            'email.email:rfc,dns:' => 'Email düzgün deyil !',
            'address.required' => 'Unvan doldurulmalıdır !',
            'phone.required' => 'Telefon qeyd olunmalıdır !',
            'phone.numeric' => 'Telefon yalniz rəqəmlərdən ibarət ola bilər !',
            'phone.digits_between' => 'Telefon  min::min   max::max simvoldan ibarət ola bilər !',
            'mobphone.required' => 'Mob.Telefon qeyd olunmalıdır !',
            'mobphone.numeric' => 'Mob.Telefon yalniz rəqəmlərdən ibarət ola bilər !',
            'mobphone.digits_between' => 'Mob.Telefon  min::min   max::max simvoldan ibarət ola bilər !',
            'fb.url' => 'Url adress düzgün qeyd olunmalıdır !',
            'instagram.url' => 'Url adress düzgün qeyd olunmalıdır !',
            'twitter.url' => 'Url adress düzgün qeyd olunmalıdır !',
            'youtube.url' => 'Url adress düzgün qeyd olunmalıdır !',
            'pdf.file'  => 'Pdf fayl seçin !',
            'img1.image'  => 'Şəkil 1 seçin !',
            'img2.image'  => 'Şəkil 2 seçin !',
            'logo.image'  => 'Şəkil 2 seçin !',
        ];
    }
}
