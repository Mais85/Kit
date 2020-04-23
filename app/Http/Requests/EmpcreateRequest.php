<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpcreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'surname' => 'required|string|max:191',
            'company' => 'required|string|max:191',
            'position_'.config('app.locale') => 'required|string|max:191',
            'email'=> 'required|email:rfc,dns',
            'phone'=> 'required|min:10|max:12',
            'mobphone'=> 'required|min:10|max:12',
            'fb'=> 'nullable|url',
            'twitter'=> 'nullable|url',
            'instagram'=> 'nullable|url',
            'linkedin'=> 'nullable|url',
            'img'=> 'nullable|image',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Ad mütləq doldurulmalıdır !',
            'name.max:191' => 'Maksimum 191 simvol daxil etmək olar !',
            'surname.required' =>'Soyad mütləq doldurulmalıdır !',
            'surname.max:191' => 'Maksimum 191 simvol daxil etmək olar !',
            'company.required' => 'Şirkət adı mütləq doldurulmalıdır !',
            'company.max:191' => 'Maksimum 191 simvol daxil etmək olar !',
            'position_'.config('app.locale').'.required' => 'Vəzifə mütləq doldurulmalıdır !',
            'position_'.config('app.locale').'.max:191' => 'Maksimum 191 simvol daxil etmək olar !',
            'email.required' => 'Email mütləq doldurulmalıdır',
            'email.email' => 'Email düzgün deyil !',
            'email.email:rfc,dns:' => 'Email düzgün deyil !',
            'phone.required' => 'Telefon qeyd olunmalıdır !',
            'mobphone.required' => 'Mob.Telefon qeyd olunmalıdır !',
            'fb.url' => 'Url adress düzgün qeyd olunmalıdır !',
            'instagram.url' => 'Url adress düzgün qeyd olunmalıdır !',
            'twitter.url' => 'Url adress düzgün qeyd olunmalıdır !',
            'linkedin.url' => 'Url adress düzgün qeyd olunmalıdır !',
            'img'=>'Şəkil seçin !',
        ];
    }
}
