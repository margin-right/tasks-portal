<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function add($array){

        $array['user_id'] = User::id()->toArray()[0]['id'];
        static::create($array);
        return $array;
    }

    public static function getLastTasks(){
        return static::orderBy('id', 'desc')->take(4)->get();
    }

    public static function getByUserId($user_id){
        return static::where('user_id', $user_id)->get();
    }

    public static function remove($id){
        
        /* Удаление задачи */

        static::where('id', $id)->delete();
    }

}
