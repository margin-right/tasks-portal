<?php

namespace App\Models;

use App\Helpers\Html;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function check($login){

        /* проверка на уникальность логина */

        if(static::where('login', $login)->exists()){
            return false;
        }else{
            return true;
        }
    }

    public static function access($login = null, $password = null){

        /* проверка логина и пароля */

        if(!$login || !$password){
            $login = session('login');
            $password = session('password');
        }

        return static::where(['login'=>$login, 'password'=>$password])->exists();
    }


    public static function add($array){

        /* создание записи */

        static::create($array);
    }

    public static function getInfo($data_array){

        /* получение информации о пользователе */

        $login = session('login');
        $password = session('password');

        if(static::access($login, $password)){
            return static::where(['login'=>$login, 'password'=>$password])->get($data_array)->toArray()[0];
        }else{
            Html::alert('Ошибка в данных сессии', 'danger');
        }
    }

    public static function id(){

        /* Получение id */

        return static::where('login', session('login'))->get('id');
    }

    public function role(){

        /* Получение роли */

        return $this->belongsTo(Role::class);
    }

    public static function getCurrent(){
        return static::where('login', session('login'))->first();
    }
}
