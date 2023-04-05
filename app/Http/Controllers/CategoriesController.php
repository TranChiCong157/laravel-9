<?php

namespace App\Http\Controllers;

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
}
