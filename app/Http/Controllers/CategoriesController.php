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
}
