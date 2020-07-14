<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlbomRequest extends FormRequest
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
            'name' => 'required| string|max:191',
            'img' => 'required_without:old_img|image',
        ];
    }


    /**
     * Get the validation messages that apply to the request.
     * @return array
     */

    public function messages()
    {
        return [
            'name.required' => 'Albom adı mütləq seçilməlidir !',
            'name.max' => 'Albom adı :max simvoldan artıq ola bilməz !',
            'img.required_without'  => 'Kapak şəkili mütləq seçilməlidir !',
            'img.image'  => 'Şəkil formatı düz deyil!',
        ];
    }
}
