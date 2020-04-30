<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectCreateRequest extends FormRequest
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
            'value3_'.config('app.locale') => 'required|max:191|numeric',
            'value4_'.config('app.locale') => 'nullable|max:191|numeric',
            'value5_'.config('app.locale') => 'nullable|max:191|numeric',
            'value6_'.config('app.locale') => 'nullable|numeric|max:191',
            'info3_'.config('app.locale') => 'required|string|max:191',
            'info4_'.config('app.locale') => 'nullable|string|max:191',
            'info5_'.config('app.locale') => 'nullable|string|max:191',
            'info6_'.config('app.locale') => 'nullable|string|max:191',
            'email'=> 'required|email:rfc,dns',
            'mobphone'=> 'required|min:10|max:12|numeric',
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
            'title1_'.config('app.locale').'.max:191' => 'Layihə adı 191 simvoldan artıq ola bilməz!',
            'title2_'.config('app.locale').'.max:191' => 'Başlıq 2 191 simvoldan artıq ola bilməz!',
            'title3_'.config('app.locale').'.max:191' => '3.Bölmə başlıq 1 191 simvoldan artıq ola bilməz !',
            'title4_'.config('app.locale').'.max:191' => '3.Bölmə başlıq 2 191 simvoldan artıq ola bilməz !',
            'title5_'.config('app.locale').'.max:191' => '3.Bölmə başlıq 3 191 simvoldan artıq ola bilməz !',
            'title6_'.config('app.locale').'.max:191' => '3.Bölmə başlıq 4 191 simvoldan artıq ola bilməz !',
            'info3_'.config('app.locale').'.required' => '3.Bölmə info 1 mütləq doldurulmalıdır !',
            'info3_'.config('app.locale').'.max:191' => '3.Bölmə info 1 191 simvoldan artıq ola bilməz !',
            'info4_'.config('app.locale').'.max:191' => '3.Bölmə info 2 191 simvoldan artıq ola bilməz !',
            'info5_'.config('app.locale').'.max:191' => '3.Bölmə info 3 191 simvoldan artıq ola bilməz !',
            'info6_'.config('app.locale').'.max:191' => '3.Bölmə info 4 191 simvoldan artıq ola bilməz !',
            'catname_'.config('app.locale').'.max:191' => 'Layihə kateqoriyası 191 simvoldan artıq ola bilməz !',
            'catname_'.config('app.locale').'.required' => 'Layihə kateqoriyası mütləq doldurulmalıdır !',
            'desc_'.config('app.locale').'.required' => 'Kontakt mətni mütləq doldurulmalıdır !',
            'contents1_'.config('app.locale').'.required' => 'Kontakt mətni mütləq doldurulmalıdır !',
            'contents2_'.config('app.locale').'.required' => 'Kontakt mətni mütləq doldurulmalıdır !',
            'value3_'.config('app.locale').'.required' => '3.Bölmə İnfo 1 ( rəqəmlərlə ) mütləq doldurulmalıdır !',
            'value3_'.config('app.locale').'.max:191' => '3.Bölmə İnfo 1 ( rəqəmlərlə ) 191 simvoldan artıq ola bilməz !',
            'value4_'.config('app.locale').'.max:191' => '3.Bölmə İnfo 2 ( rəqəmlərlə ) 191 simvoldan artıq ola bilməz !',
            'value5_'.config('app.locale').'.max:191' => '3.Bölmə İnfo 3 ( rəqəmlərlə ) 191 simvoldan artıq ola bilməz !',
            'value6_'.config('app.locale').'.max:191' => '3.Bölmə İnfo 4 ( rəqəmlərlə ) 191 simvoldan artıq ola bilməz !',
            'value3_'.config('app.locale').'.numeric' => '3.Bölmə İnfo 1 ( rəqəmlərlə ) yalnız rəqəmlərdən ibarət ola bilər !',
            'value4_'.config('app.locale').'.numeric' => '3.Bölmə İnfo 2 ( rəqəmlərlə ) yalnız rəqəmlərdən ibarət ola bilər !',
            'value5_'.config('app.locale').'.numeric' => '3.Bölmə İnfo 3 ( rəqəmlərlə ) yalnız rəqəmlərdən ibarət ola bilər !',
            'value6_'.config('app.locale').'.numeric' => '3.Bölmə İnfo 4 ( rəqəmlərlə ) yalnız rəqəmlərdən ibarət ola bilər !',
            'email.required' => 'Email mütləq doldurulmalıdır',
            'email.email' => 'Email düzgün deyil !',
            'email.email:rfc,dns:' => 'Email düzgün deyil !',
            'mobphone.required' => 'Mob.Telefon qeyd olunmalıdır !',
            'mobphone' => 'Mob.Telefon yalniz rəqəmlərdən ibarət ola bilər,  min 10 - max 12 simvoldan ibarət olunmalıdır !',
            'link.url' => 'Url adress düzgün qeyd olunmalıdır !',
            'img1.image'  => 'Şəkil 1 seçin !',
            'img2.image'  => 'Şəkil 2 seçin !',
        ];
    }

}
