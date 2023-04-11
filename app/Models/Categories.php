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
        
        return DB::table($this->table)
        ->insert($insert);
    }

    public function getId($id){

        return DB::select('select * from '.$this->table.' where id = ?',[$id]);
        // return DB::table($this->table)
        // ->where('id', '=',$id);

    
    }

    public function updateCate($data,$id){
        return DB::table($this->table)
        ->where('id','=', $id)
        ->update($data);
    }

    public function deleteCategories($id){

        return DB::delete('DELETE FROM '.$this->table.' WHERE id = ?', [$id]);
       
    }
}
