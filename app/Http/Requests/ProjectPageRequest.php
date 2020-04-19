<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectPageRequest extends FormRequest
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
            'contents_'.config('app.locale') => 'required|string',
        ];
    }

    /**
     * Get the validation rules messages apply to the request
     *
     * @return array
     */
    public function messages()
    {
        return [
            'contents_'.config('app.locale').'.required' => 'Mətn mütləq doldurulmalıdır !',
        ];
    }
}
