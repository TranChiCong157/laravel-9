<?php

namespace App\Http\Requests;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required|email',
            'address' => 'required|min:6',
            'phone' => 'required|min:10',
         

        ];
    }

    public function messages(){
        return [
            //cach 1 khong dung attribute
    // 'name.required' => 'Trường bat buoc phai nhap',
    // 'name.min' => 'Trường bat buoc phai nhap lon hon :min ki tu',
    // 'price.required' => 'Trường bat buoc phai nhap',
    // 'price.integer' => 'Trường bat buoc phai nhap la so'
    //cach 2 dung attribute
    'name.required' => 'Trường :attribute không được để trống',
    'name.min' => 'Trường :attribute phải nhập lớn hơn :min kí tự',
    'email.required' => 'Trường :attribute không được để trống',
    'email.email' => 'Trường :attribute phải đúng định dạng email ',
    // 'email.unique' => 'Trường :attribute đã tồn tại ',
    'address.required' => 'Trường :attribute không được để trống',
    'address.min' => 'Trường :attribute phải nhập lớn hơn :min kí tự',
    'phone.min' => 'Trường :attribute phải nhập lớn hơn :min kí tự',
    'phone.required' => 'Trường :attribute không được để trống'
    


        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Họ Tên',
            'address' => 'Địa chỉ',
            'phone' => 'số điện thoại',
            'creat_at' => 'ngày tháng'
        ];
    }
}
