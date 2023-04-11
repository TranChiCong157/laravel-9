<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Products;

class ProductController extends Controller
{
   public $products;
   public function __construct()
   {
    $this->products = new Products();
   } 

   public $data = [];
   


    public function index(){


        $title = 'Danh sách sản phẩm';
         $listProduct = $this->products->getAll();
        return view('admin.products.list',compact('title','listProduct'));

    }

    public function addProduct(){

        $this->data['title'] = 'Thêm sản phẩm';
        return view('admin.products.add',$this->data);

    }

    public function postAdd(ProductRequest $request){

        $insert = 
        [
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity
        ];
      $this->products->addProduct($insert);
     return redirect()->route('product.list')->with('msg','Thêm thành công');
      
        // dd($request);
        // return redirect()->route('product')->with('msg','Thanh cong');
    //    $rules = [
    //     'name' => 'required|min:6',
    //     'price' => 'required|integer'
    //    ];
       

    //    $messages = [
    //     'name.required' => 'Truong bat buoc phai nhap',
    //     'name.min' => 'Truong bat buoc phai nhap lon hon :min ki tu',
    //     'price.required' => 'Truong bat buoc phai nhap',
    //     'price.integer' => 'Truong bat buoc phai nhap la so'
    //    ];
       
    //    $request->validate($rules, $messages);
      
    }
}
