<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceUpdateRequest extends FormRequest
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
            'company' => 'required',
            'img1' => 'nullable|image',
            'img2' => 'nullable|image',
            'pdf'=> 'nullable|file',
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
            'title_'.config('app.locale').'.required' => 'Xidmətin adı mütləq qeyd olunmalıdır !',
            'contents_'.config('app.locale').'.required' => 'Mətn mütləq doldurulmalıdır !',
            'title_'.config('app.locale').'.max:191' => 'Başlıq naksimum 191 simvoldan ibarət ola bilər.',
            'company.required' => 'Şirkət mütləq qeyd olunmalıdır !',
            'img1.image' => 'Şəkil 1 mütləq seçilməlidir !',
            'img2.image' => 'Şəkil 2 mütləq seçilməlidir !',
            'pdf.file'  => 'Pdf fayl seçin !',
        ];
    }
}
