<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        $userId = $this->route('user');

        return [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $userId,
        ];
    }
    public function messages()
    {
        return [
            'name.max' => 'Số kí tự phải nhỏ hơn 255 ký tự',
            'name.required' => 'Name không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Phải đúng định dạng email',
            'email.unique' => 'email không được trùng',
        ];
    }
}
