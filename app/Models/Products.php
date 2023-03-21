<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    public $products;

    public function getAll(){
        $list = DB::table('products')
        ->select('id','name', 'price')
        ->where([
            [
                'id', '>=' ,3
            ],
            [
                'id', '<=' ,8
            ],
        ])
        ->get();
        dd($list);
    }
}
