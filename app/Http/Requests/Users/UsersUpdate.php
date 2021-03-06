<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UsersUpdate extends FormRequest
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
            'name'  => 'required',
            'email'  => 'required',
            'phone'  => 'required',
            'address'  => 'required',
            'role_id'  => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'  => 'Vui lòng nhập tên',
            'email.required'  => 'Vui lòng nhập email',
            'email.email'  => 'Nhập đúng định dạng email',
            'email.unique'  => 'Email này đã được sử dụng',
            'phone.required'  => 'Vui lòng nhập sđt',
            'address.required'  => 'Vui lòng nhập địa chỉ',
            'role_id.required'  => 'Vui lòng chọn cấp độ',
        ];
    }
}
