<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use LaravelLocalization;

class StorePageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     *
     * @todo Add logic to authorize only admin accounts
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
        $rules = [];

        foreach (LaravelLocalization::getSupportedLanguagesKeys() as $lang) {
            $rules["name_{$lang}"] = 'required';
        }

        return $rules;
    }
}
