<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesRequest;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public $categories;
    public function __construct()
    {
        $this->categories = new Categories();
    }
    public $data = [];

    public function index(){
          
        $title = $this->data = 'Danh mục';

        $categories = $this->categories->getAll();

        // dd($categories);

        return view('admin.categories.list', compact('title','categories'));

    }

    public function addCategories(){

        $title = $this->data = 'Thêm danh mục';
        return view('admin.categories.add',compact('title'));


    }

    public function postAdd(CategoriesRequest $request){

        $insert = 
            [
                'cate_name' => $request->name
            ];
          $this->categories->addCategories($insert);
         return redirect()->route('categories.list')->with('msg','Thêm thành công');
    }

    public function editCategories(Request $request, $id){

        $title = 'Cập nhật người dùng';
        

        if(!empty($id)){
            $cateId = $this->categories->getId($id);
            
           
            if(!empty($cateId[0])){
                $request->session()->put('id',$id);
                $cateId = $cateId[0];
            }else{
                return redirect()->route('categories.list')->with('msg','Người dùng không còn tồn tại');
            }

        }else{
            return redirect()->route('categories.list')->with('msg','Người dùng không còn tồn tại');

        }
        
        return view('admin.categories.edit',compact('title', 'cateId')); 
    }

    public function postCategories(Request $request){
        $id = session('id');
        if(empty($id)){
            return back()->with('msg', 'Liên kết không tồn tại');
        }
        
            $rules = [
        'name' => 'required|min:6'
        
       ];
       

       $messages = [
        'name.required' => 'Truong bat buoc phai nhap',
        'name.min' => 'Truong bat buoc phai nhap lon hon :min ki tu',
       
       ];
       
       $request->validate($rules, $messages);

       $update = 
       [
           'cate_name' => $request->name
       ];

       $this->categories->updateCate($update, $id);

       return redirect()->route('categories.list')->with('msg', 'Cập nhật người dùng thành công');

       

    }

    public function delete($id = 0){

        $this->categories->deleteCategories($id);
        return redirect()->route('categories.list')->with('msg', 'Xoá danh mục thành công');




    }

    
}
