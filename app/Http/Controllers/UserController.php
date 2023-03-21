<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    private $users;

    public function __construct()
    {
        $this->users = new Users();
    }
    public $data = [];

    public function index(){
   
        $title = 'Danh sach User';
       
        $listUser = $this->users->getAllUser();
       
        return view('admin.users.list',compact('title','listUser')); 


    }
     
    public function addUser(){
        $title = 'Thêm người dùng';
        return view('admin.users.add',compact('title')); 


    }

    public function postAdd(UserRequest $request){
        // dd($request);
        $insert = [
        $request->name,
        $request->email,
        $request->password,
        $request->address,
        $request->phone,
        date('Y-m-d')
        ];
        

        $this->users->addUser($insert);

        return redirect()->route('user.list')->with('msg','Thêm thành công');
      
    }

    public function getEdit(Request $request , $id){
        $title = 'Cập nhật người dùng';

        if(!empty($id)){

            $userId = $this->users->getId($id);
            if(!empty($userId[0])){
                $request->session()->put('id',$id);
                $userId = $userId[0];
            }else{
                return redirect()->route('users.list')->with('msg','Người dùng không còn tồn tại');
            }

        }else{
            return redirect()->route('users.list')->with('msg','Người dùng không còn tồn tại');

        }
        
        return view('admin.users.edit',compact('title', 'userId')); 
    }

    public function postEdit(UserRequest $request ){
        $id = session('id');
        if(empty($id)){
            return back()->with('msg', 'Liên kết không tồn tại');
        }
        $update = [
            $request->name,
            $request->email,
            $request->password,
            $request->address,
            $request->phone,
            date('Y-m-d')
        ];

        $this->users->updateUser($update,$id);
        return redirect()->route('user.list')->with('msg', 'Cập nhật người dùng thành công');


    }
    public function delete($id=0){

        $this->users->deleteUser($id);
        return redirect()->route('user.list')->with('msg', 'Xoá người dùng thành công');
    }

    
}
