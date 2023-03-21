<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PhpParser\Node\Expr\FuncCall;

class ProductRequest extends FormRequest
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
            'name' => 'required|min:6',
            'price' => 'required|integer'
        ];
    }
        public function messages(){
            return [
                //cach 1 khong dung attribute
        // 'name.required' => 'Truong bat buoc phai nhap',
        // 'name.min' => 'Truong bat buoc phai nhap lon hon :min ki tu',
        // 'price.required' => 'Truong bat buoc phai nhap',
        // 'price.integer' => 'Truong bat buoc phai nhap la so'
        //cach 2 dung attribute
        'name.required' => 'Truong :attribute bat buoc phai nhap',
        'name.min' => 'Truong :attribute bat buoc phai nhap lon hon :min ki tu',
        'price.required' => 'Truong :attribute bat buoc phai nhap',
        'price.integer' => 'Truong :attribute bat buoc phai nhap la so'
            ];
        }

        public function attributes()
        {
            return [
                'name' => ' Ten san pham',
                'price' => 'gia san pham'
            ];
        }
    
}
