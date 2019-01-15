<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePermissionRequest extends FormRequest
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
        $permissionId = $this->route('permission');
        return [
            'display_name' => 'required|max:255',
            'description' => 'max:255',
        ];
    }
    public function messages()
    {
        return [
            'display_name.max' => 'display_name Số kí tự phải nhỏ hơn 255 ký tự',
            'display_name.required' => 'display_name không được để trống',
            'description.max' => 'description không được vượt quá 255 ký tự',
        ];
    }
}
