<?php

namespace App\Http\Controllers;

use App\Helpers\Html;
use App\Models\User;
use Illuminate\Http\Request; 

class AuthController extends Controller
{
    public function registration(Request $request){

        $input = $request->all();

        if(User::check($input['login']) == false){

            /* действия если такой логин уже зареган */

            Html::alert('Пользователь с таким логином уже существует', 'warning');
            return redirect()->route('registration');

        }
        if(preg_match('/^[A-Za-z]/', $input['login']) == true){

            /* действия при правильном логине */

            if($request->file('avatar')){
                $avatar = $request->file('avatar')->store('public/avatars');
                $input['avatar'] = $avatar;
            }
            User::add($input);
            session(['login' => $input['login'], 'password' => $input['password']]);
            Html::alert('Вы успешно зарегистрировались!','success');
            return redirect()->route('index');

        }else{

            /* действия при не правильном логине */

            Html::alert('Логин должен содержать только латиницу', 'danger');
            return redirect()->route('registration');

        }
    }

    public function login(Request $request){

        $input = $request->all();
        
        if(User::access($input['login'], $input['password'])){

            /* действия при правильном логине */

            session(['login' => $input['login'], 'password' => $input['password']]);
            Html::alert('Добро пожаловать!', 'success');
            return redirect()->route('index');

        }else{

            /* действия при не правильном логине */

            Html::alert('Неверный логин или пароль', 'danger');
            return redirect()->route('login');
        }
    }

    public function logout(){

        /* выход из профиля */

        session()->flush();
        return redirect()->route('index');
    }

    public function admin(){
        
        return view('admin');
        
    }

}
