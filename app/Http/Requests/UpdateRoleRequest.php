<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
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
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        $roleId = $this->route('role');

        return [
            'display_name' => 'required|max:255',
            'name' => 'required|max:100|alpha_dash|unique:roles' . $roleId,
            'description' => 'sometimes|max:255',
        ];
    }
    public function messages()
    {
        return [
            'display_name.max' => 'Số kí tự phải nhỏ hơn 255 ký tự',
            'display_name.required' => 'Tên không được để trống',
            'name.required' => 'Email không được để trống',
            'name.max' => 'Tên không được vượt quá 100 ký tự',
            'name.alpha_dash' => 'Tên có đinh dạng sai',
            'name.unique' => 'Tên không được trùng',
            'description.max' => 'description không được vượt quá 255 ký tự',
        ];
    }
}
