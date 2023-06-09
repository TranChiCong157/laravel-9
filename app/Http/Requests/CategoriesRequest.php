<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriesRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:categories,cate_name'
        ];
    }

    public function messages(){
        return [
           
            'name.required' => ':attribute không được để trống',
            'name.unique' => ':attribute đã tồn tại'
        ];
    }

    public function attributes(){
        return [
        'name' => 'Tên danh mục'
    ];
    }
}
