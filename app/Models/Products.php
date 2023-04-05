<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Raw;

class Products extends Model
{
    public $products;

    public function getAll(){
        // $id = 5;
        // DB::enableQueryLog();
        // $list = DB::table('products')
        // ->select('id','name', 'price')
        #viết theo  và
        // ->where([
        //     [
        //         'id', '>=' ,3
        //     ],
        //     [
        //         'id', '<=' ,8
        //     ],
        // ])
        # viết theo  and or
        // ->where('id','>',5)
        // ->where(function($query) use ($id) {
        //     $query->where('id', '<', 9 )->orWhere('id' ,'>',$id);

        // })
        # tìm kiếm
        // ->where('name','like', '%C%')
        #lấy trong khoảng between
        // ->whereBetween('id', [5, 8] )
        #

        

        // -----------------------------------------------

        // $list = DB::table('products')
        // ->select('products.*', 'categories.cate_name')
        // ->join('categories','products.cate_id','=' ,'categories.id')
        // ->limit(6)
        // ->offset(4)
        // ->get();


        
        // dd($list);
        
        // -------------------insert dữ liệu-----------------
        // $status =  DB::table('products')
        // ->insert(
        //     [
        //         'name' => 'Test insert',
        //         'price' => '1234',
        //         'quantity'=>'5678',
        //         'cate_id' =>1
        //     ],
        // );

        // lấy id sau khi insert----------
        //cách 1
        // $id = DB::getPdo()->lastInsertId();
        // dd($id);
        #cách 2
        #sử dụng gộp với insert luôn
        // $id = DB::table('products')->insertGetId(
        //     [
        //         'name' => 'Test insert id',
        //         'price' => '1234',
        //         'quantity'=>'5678',
        //         'cate_id' =>2
        //     ]
        // );
        // dd($id);
        // -----------------------------update-------------

        // $status = DB::table('products')
        // ->where('id',10)
        // ->update([
        //     'name' => 'Test update',
        //     'price' => '1234',
        //     'quantity'=>'5678',
        //     'cate_id' =>1
        // ]);
        #----------------------delete----------------

        // $status = DB::table('products')
        // ->where('id',17)
        // ->delete();

        // ---------------------------
        # Đếm số bản ghi
            #cách 1
        // $list = DB::table('products')
        // ->where('id','>',6)
        // ->get();

        // $count = count($list);

       
        // dd($count);
        //------------- RAW QUERRY--------------

        // $list = DB::table('products')
        // ->select(
        //     DB::raw(' `name` as tensp , `price` , `quantity`')
        // )
        // ->get();
        // $sql = DB::getQueryLog();
        // dd($sql);
        return DB::table('products')->get();
    }

    // public function addProduct(){
    //     return DB::table('products')
    //     ->insert(

    //     )
    // }
}
