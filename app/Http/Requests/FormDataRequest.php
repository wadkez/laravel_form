<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class FormDataRequest extends FormRequest
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
            'name'          => 'required|min:5',
            'phone'         => 'required|regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/',
            'email'         => 'required|email',
            'address'       => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'Введите имя',
            'name.min'          => 'Имя не может состоять из одной буквы',
            'phone.required'    => 'Поле телефон не может быть пустым',
            'phone.regex'       => 'Введите телефон в правильном формате',
            'email.required'    => 'Поле email не может быть пустым',
            'email.email'       => 'Введите корректный email',
            'address.required'  => 'Поле адрес не может быть пустым'
        ];
    }
}
