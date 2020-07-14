<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceCreateRequest extends FormRequest
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
            'title_'.config('app.locale') => 'required|string|max:191|unique:services,title',
            'contents_'.config('app.locale') => 'required|string',
            'company' => 'required',
            'img1' => 'nullable|image',
            'pos_number' => 'required|numeric',
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
            'title_'.config('app.locale').'.unique' => 'Xidmətin adı unikal olmalıdır (bu adda xidmət adı mövcuddur) !',
            'contents_'.config('app.locale').'.required' => 'Mətn mütləq doldurulmalıdır !',
            'title_'.config('app.locale').'.max:191' => 'Başlıq naksimum 191 simvoldan ibarət ola bilər.',
            'company.required' => 'Şirkət mütləq qeyd olunmalıdır !',
            'img1.image' => 'Şəkil 1 bölməsindəki şəkil formatı duz deyil !',
            'img2.image' => 'Şəkil 2 bölməsindəki şəkil formatı duz deyil !',
            'pdf.file'  => 'Pdf fayl seçin !',
            'pos_number.required' => 'Sıra nömrəsi mütləq qeyd olunmalıdır',
        ];
    }
}
