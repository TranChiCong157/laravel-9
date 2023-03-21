<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public $data = [];
    
    public function index(){
      
        $this->data['title'] = 'Home';
        return view('admin.home',$this->data);
    }
}
