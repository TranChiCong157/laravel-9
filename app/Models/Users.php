<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    protected $table = 'users';
    use HasFactory;

   public function getAllUser(){

    $users = DB::select('SELECT * from users ORDER BY id ASC');
    return $users;

   }
   public function addUser($data){

    DB::insert('INSERT INTO '.$this->table.' (name, email, password, address, phone, creat_at) VALUES (?,?,?,?,?,?)',$data);
        
   }

   public function getId($id){
    return DB::select('select * from '.$this->table.' where id = ?',[$id]);
   }
   public function updateUser($data, $id){
    $data[] = $id;
    return DB::update('update '.$this->table.' set name=?, email=?, password=?, address=?, phone =?, creat_at = ?  where id = ?', $data);
   }

   public function deleteUser($id){
    return DB::delete('DELETE FROM '.$this->table.' WHERE id = ?', [$id]);
   }
   
}

