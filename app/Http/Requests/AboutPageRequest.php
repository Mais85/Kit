<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutPageRequest extends FormRequest
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
            'title1_'.config('app.locale') => 'required|string',
            'title2_'.config('app.locale') => 'required|string',
            'title3_'.config('app.locale') => 'required|string',
            'content1_'.config('app.locale') => 'required|string',
            'content2_'.config('app.locale') => 'required|string',
            'content2_'.config('app.locale') => 'required|string',
            'desc1_'.config('app.locale') => 'nullable|string',
            'desc2_'.config('app.locale') => 'nullable|string',
            'desc3_'.config('app.locale') => 'nullable|string',
            'desc4_'.config('app.locale') => 'nullable|string',
            'smtxt1_'.config('app.locale') => 'nullable|string',
            'smtxt2_'.config('app.locale') => 'nullable|string',
            'smtxt3_'.config('app.locale') => 'nullable|string',
            'smtxt4_'.config('app.locale') => 'nullable|string',
            'img' => 'nullable|image',
        ];
    }

    public function messages()
    {
        return [
            'title1_'.config('app.locale').'.required' => 'Başlıq 1 mütləq doldurulmalıdır !',
            'title2_'.config('app.locale').'.required' => 'Başlıq 2 mütləq doldurulmalıdır !',
            'title3_'.config('app.locale').'.required' => 'Başlıq 3 mütləq doldurulmalıdır !',
            'content1_'.config('app.locale').'.required' => 'Mətn 1 mütləq doldurulmalıdır !',
            'content2_'.config('app.locale').'.required' => 'Mətn 2 mütləq doldurulmalıdır !',
            'content3_'.config('app.locale').'.required' => 'Mətn 3 mütləq doldurulmalıdır !',
        ];
    }
}
