<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialsCreateRequest extends FormRequest
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
            'username' => 'required|string|max:191',
            'company' => 'required|string|max:191',
            'position_'.config('app.locale') => 'required|string|max:191',
            'contents_'.config('app.locale') => 'required|string|max:191',
            'facebook'=> 'nullable|url',
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
            'username.required' => 'Ad mütləq doldurulmalıdır !',
            'username.max:191' => 'Maksimum 191 simvol daxil etmək olar !',
            'company.required' => 'Şirkət adı mütləq doldurulmalıdır !',
            'company.max:191' => 'Maksimum 191 simvol daxil etmək olar !',
            'position_'.config('app.locale').'.required' => 'Vəzifə mütləq doldurulmalıdır !',
            'contents_'.config('app.locale').'.required' => 'Vəzifə mütləq doldurulmalıdır !',
            'position_'.config('app.locale').'.max:191' => 'Maksimum 191 simvol daxil etmək olar !',
            'contents_'.config('app.locale').'.max:191' => 'Maksimum 191 simvol daxil etmək olar !',
            'facebook.url' => 'Url adress düzgün qeyd olunmalıdır !',
            'instagram.url' => 'Url adress düzgün qeyd olunmalıdır !',
            'twitter.url' => 'Url adress düzgün qeyd olunmalıdır !',
            'linkedin.url' => 'Url adress düzgün qeyd olunmalıdır !',
            'img.image'=>'Şəkil formati düz deyil !',
        ];
    }
}
