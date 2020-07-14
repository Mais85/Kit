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
            'contacttext_'.config('app.locale') => 'nullable|string|max:600',
            'email' => 'required_without:email2|nullable|email:rfc,dns',
            'email2' => 'nullable|email:rfc,dns',
            'address'=> 'required',
            'phone'=> 'required|min:9',
            'shortphone'=> 'nullable|min:3',
            'mobphone'=> 'required_without:mobphone2|nullable|min:9',
            'mobphone2'=> 'nullable|min:9',
            'fb'=> 'nullable|url',
            'linkedin'=> 'nullable|url',
            'instagram'=> 'nullable|url',
            'youtube'=> 'nullable|url',
            'pdf'=> 'nullable|file',
            'pos_number' => 'required|numeric',
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
//            'contacttext_'.config('app.locale').'.required' => 'Kontakt mətni mütləq doldurulmalıdır !',
            'contacttext_'.config('app.locale').'.max' => 'Hər dil üzrə maksimum 191 simvol daxil etmək olar !',
            'email.required_without' =>'Email veya Email 2 mütləq doldurulmalıdır !',
            'email.email:rfc,dns' =>'Email doğru deyil !',
            'email2.email:rfc,dns' =>'Email doğru deyil !',
            'address.required' => 'Unvan doldurulmalıdır !',
            'phone.required' => 'Telefon qeyd olunmalıdır !',
            'phone.min' => 'Telefon  min::min  simvoldan ibarət ola bilər !',
            'shortphone.min' => 'Qısa nömrə  min::min  simvoldan ibarət ola bilər !',
            'mobphone.required_without' => 'Mob.Telefon veya Mob.Telefon 2 mütləq qeyd olunmalıdır !',
            'mobphone.min' => 'Mob.Telefon  min::min simvoldan ibarət ola bilər !',
            'mobphone2.min' => 'Mob.Telefon  min::min simvoldan ibarət ola bilər !',
            'fb.url' => 'Url adress düzgün qeyd olunmalıdır !',
            'instagram.url' => 'Url adress düzgün qeyd olunmalıdır !',
            'linkedin.url' => 'Url adress düzgün qeyd olunmalıdır !',
            'youtube.url' => 'Url adress düzgün qeyd olunmalıdır !',
            'pdf.file'  => 'Pdf fayl seçin !',
            'pos_number.required' => 'Sıra nömrəsi mütləq qeyd olunmalıdır',
            'img1.image'  => 'Şəkil 1 seçin !',
            'img2.image'  => 'Şəkil 2 seçin !',
            'logo.image'  => 'Şəkil 2 seçin !',
        ];
    }
}
