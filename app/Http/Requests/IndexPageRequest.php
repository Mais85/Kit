<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndexPageRequest extends FormRequest
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
            'head_title_'.config('app.locale') => 'required| max:191',
            'title1_'.config('app.locale') => 'required| max:191',
            'title2_'.config('app.locale') => 'required| max:191',
            'contents1_'.config('app.locale') => 'required',
            'contents2_'.config('app.locale') => 'required',
            'img1' => 'nullable|image',
            'img2' => 'nullable|image',
            'img3' => 'nullable|image',
            'img4' => 'nullable|image',
            'img5' => 'nullable|image',
            'img6' => 'nullable|image',
            'video' => 'nullable|file',
        ];
    }

    public function messages()
    {
        return[
            'head_title_'.config('app.locale').'.required' => 'Əsas Başlıq  mütləq doldurulmalıdır !',
            'title1_'.config('app.locale').'.required' => 'Başlıq 1 mütləq doldurulmalıdır !',
            'title2_'.config('app.locale').'.required' => 'Başlıq 2 mütləq doldurulmalıdır !',
            'contents1_'.config('app.locale').'.required' => 'Mətn 1 mütləq doldurulmalıdır !',
            'contents2_'.config('app.locale').'.required' => 'Mətn 2 mütləq doldurulmalıdır !',
            'max:191' => 'Maksimum 191 simvol daxil etmək olar',
            'image' => 'Şəkil seçin !',
            'video.file' => 'Video fayl seçin !',
        ];
    }
}
