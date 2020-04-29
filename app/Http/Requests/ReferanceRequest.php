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
            'title' => 'required|string|max:191',
            'desc_'.config('app.locale') => 'required|string|max:191',
            'img' => 'image|nullable',
            'link' => 'url|nullable',
        ];
    }
}
