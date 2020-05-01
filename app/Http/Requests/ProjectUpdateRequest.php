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
            'title3_'.config('app.locale') => 'required|string|max:191',
            'title4_'.config('app.locale') => 'nullable|string|max:191',
            'title5_'.config('app.locale') => 'nullable|string|max:191',
            'title6_'.config('app.locale') => 'nullable|string|max:191',
            'catname_'.config('app.locale') => 'required|string|max:191',
            'desc_'.config('app.locale') => 'required|string',
            'contents1_'.config('app.locale') => 'required|string',
            'contents2_'.config('app.locale') => 'required|string',
            'val3' => 'required|numeric|digits_between:0,191',
            'val4' => 'numeric|digits_between:0,191',
            'val5' => 'numeric|digits_between:0,191',
            'val6' => 'numeric|digits_between:0,191',
            'info3_'.config('app.locale') => 'required|string|max:191',
            'info4_'.config('app.locale') => 'nullable|string|max:191',
            'info5_'.config('app.locale') => 'nullable|string|max:191',
            'info6_'.config('app.locale') => 'nullable|string|max:191',
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
            'title3_'.config('app.locale').'.required' => '3.Bölmə başlıq 1 mütləq doldurulmalıdır !',
            'title1_'.config('app.locale').'.max' => 'Layihə adı 191 simvoldan artıq ola bilməz!',
            'title2_'.config('app.locale').'.max' => 'Başlıq 2 191 simvoldan artıq ola bilməz!',
            'title3_'.config('app.locale').'.max' => '3.Bölmə başlıq 1 191 simvoldan artıq ola bilməz !',
            'title4_'.config('app.locale').'.max' => '3.Bölmə başlıq 2 191 simvoldan artıq ola bilməz !',
            'title5_'.config('app.locale').'.max' => '3.Bölmə başlıq 3 191 simvoldan artıq ola bilməz !',
            'title6_'.config('app.locale').'.max' => '3.Bölmə başlıq 4 191 simvoldan artıq ola bilməz !',
            'info3_'.config('app.locale').'.required' => '3.Bölmə info 1 mütləq doldurulmalıdır !',
            'info3_'.config('app.locale').'.max' => '3.Bölmə info 1 191 simvoldan artıq ola bilməz !',
            'info4_'.config('app.locale').'.max' => '3.Bölmə info 2 191 simvoldan artıq ola bilməz !',
            'info5_'.config('app.locale').'.max' => '3.Bölmə info 3 191 simvoldan artıq ola bilməz !',
            'info6_'.config('app.locale').'.max' => '3.Bölmə info 4 191 simvoldan artıq ola bilməz !',
            'catname_'.config('app.locale').'.max' => 'Layihə kateqoriyası 191 simvoldan artıq ola bilməz !',
            'catname_'.config('app.locale').'.required' => 'Layihə kateqoriyası mütləq doldurulmalıdır !',
            'desc_'.config('app.locale').'.required' => 'Kontakt mətni mütləq doldurulmalıdır !',
            'contents1_'.config('app.locale').'.required' => 'Kontakt mətni mütləq doldurulmalıdır !',
            'contents2_'.config('app.locale').'.required' => 'Kontakt mətni mütləq doldurulmalıdır !',
            'val3.required' => '3.Bölmə İnfo 1 ( rəqəmlərlə ) mütləq doldurulmalıdır !',
            'val3.digits_between' => '3.Bölmə İnfo 1 ( rəqəmlərlə ) min :min  max :max simvoldan ibarət ola bilər !',
            'val4.digits_between' => '3.Bölmə İnfo 2 ( rəqəmlərlə ) min :min  max :max simvoldan ibarət ola bilər !',
            'val5.digits_between' => '3.Bölmə İnfo 3 ( rəqəmlərlə ) min :min  max :max simvoldan ibarət ola bilər !',
            'val6.digits_between' => '3.Bölmə İnfo 4 ( rəqəmlərlə ) min :min  max :max simvoldan ibarət ola bilər !',
            'val3.numeric' => '3.Bölmə İnfo 1 ( rəqəmlərlə ) yalnız rəqəmlərdən ibarət ola bilər !',
            'val4.numeric' => '3.Bölmə İnfo 2 ( rəqəmlərlə ) yalnız rəqəmlərdən ibarət ola bilər !',
            'val5.numeric' => '3.Bölmə İnfo 3 ( rəqəmlərlə ) yalnız rəqəmlərdən ibarət ola bilər !',
            'val6.numeric' => '3.Bölmə İnfo 4 ( rəqəmlərlə ) yalnız rəqəmlərdən ibarət ola bilər !',
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
