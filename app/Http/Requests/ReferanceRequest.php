<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReferanceRequest extends FormRequest
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
            'referancer' => 'required|string|max:191',
            'name' => 'required|string|max:191',
            'position_'.config('app.locale') => 'required|string|max:191',
            'img' => 'image|nullable',
            'ref_date' => 'nullable|date',
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
            'referancer.required' => 'Referansverən şirkətin adı mütləq doldurulmalıdır !',
            'referancer.max:191' => 'Referansverən şirkətin adı maksimum 191 simvoldan ibarət ola bilər !',
            'name.required' => 'Referansverən əməkdaş mütləq doldurulmalıdır !',
            'name.max:191' => 'Referansverən əməkdaşın adı maksimum 191 simvoldan ibarət ola bilər !',
            'position_'.config('app.locale').'.required' =>'Vəzifəsi mütləq doldurulmalıdır !',
            'position_'.config('app.locale').'.max:191' =>'Vəzifəsi  191 simvoldan artıq ola bilməz!',
            'img.image' => 'Yalnız şəkil seçmək olar !',
        ];
    }
}
