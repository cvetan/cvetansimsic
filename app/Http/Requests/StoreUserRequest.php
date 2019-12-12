<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return auth()->user()->is_admin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $rules = [
            'first_name'      => 'required',
            'last_name'       => 'required',
            'username'        => 'required|unique:users,username',
            'email'           => 'required|email|unique:users,email',
            'password'        => 'required|confirmed'
        ];

        if ($this->getMethod() === 'PATCH') {
            $user = $this->segment(3);
            $rules['username'] .= ",{$user},id";
            $rules['email'] .= ",{$user},id";
            $rules['password'] = 'confirmed';
        }

        return $rules;
    }
}
