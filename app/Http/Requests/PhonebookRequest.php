<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhonebookRequest extends FormRequest
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
            'name' => 'required|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email|unique:phonebooks',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Field nama harus di isi',
            'phone.required' => 'Field phone harus di isi',
            'email.required' => 'Field email harus di isi',
            'email.email' => 'Email harus berupa email',
        ];
    }
}
