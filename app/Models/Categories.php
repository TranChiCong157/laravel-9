<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{
    use HasFactory;
    public $table = 'categories';

    public function getAll(){
        
         return DB::table($this->table)->get();
       
    }

    public function addCategories($insert){
        
        return DB::table('categories')
        ->insert($insert);
    }
}
