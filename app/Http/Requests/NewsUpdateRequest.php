<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsUpdateRequest extends FormRequest
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
            'title_'.config('app.locale') => 'required|string|max:191',
            'contents_'.config('app.locale') => 'required|string',
            'img' => 'nullable|image',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title_'.config('app.locale').'.required' => 'Başlıq mütləq qeyd olunmalıdır !',
            'contents_'.config('app.locale').'.required' => 'Mətn mütləq doldurulmalıdır !',
            'title_'.config('app.locale').'.max:191' => 'Başlıq naksimum 191 simvoldan ibarət ola bilər.',
            'img.image' => 'Şəkil mütləq seçilməlidir !',
        ];
    }
}
