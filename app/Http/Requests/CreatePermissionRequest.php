<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePermissionRequest extends FormRequest
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
        return [
            'display_name' => 'required|max:255',
            'name' => 'required|max:255|unique:permissions,name',
            'description' => 'max:255',
            'resource' => 'required|min:3|max:100',
        ];
    }
    public function messages()
    {
        return [
            'display_name.max' => 'Số kí tự phải nhỏ hơn 255 ký tự',
            'display_name.required' => 'Tên không được để trống',
            'name.required' => 'Tên không được để trống',
            'name.max' => 'Tên không được vượt quá 255 ký tự',
            'description.max' => 'description không được vượt quá 255 ký tự',
            'resource.max' => 'resource không được vượt quá 255 ký tự',
            'resource.min' => 'resource không được nhỏ hơn 3 ký tự',
            'resource.required' => 'resource không được để trống',
        ];
    }
}
