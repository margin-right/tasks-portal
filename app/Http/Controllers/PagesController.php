<?php

namespace App\Http\Controllers;

use App\Helpers\Html;
use App\Models\Task;
use App\Models\User;

class PagesController extends Controller
{  
    
    public function index(){

        /* Загрузка последних задач и парсинг даты */

        $tasks = Task::getLastTasks();
        foreach ($tasks as $item) {
            $dateArray = Html::dateParse($item['created_at']);
            $item['created_time'] = $dateArray['day'].'-'.$dateArray['month'].'-'.$dateArray['year'];
        }

        return view('index', ['tasks'=>$tasks]);
    }

    public function profile(){

        /* действия перед заходом в профиль */
        
        if(User::access()){

            $data = User::getInfo(['id', 'firstName', 'secondName', 'lastName', 'login', 'avatar']);

            $tasks = Task::getByUserId($data['id']);
            foreach ($tasks as $item) {
                $dateArray = Html::dateParse($item['created_at']);
                $item['created_time'] = $dateArray['day'].'-'.$dateArray['month'].'-'.$dateArray['year'];
            }

            return view('profile', ['data' => $data, 'tasks'=>$tasks]);

        }else{
            return redirect()->route('index');
        }
        
    }



    /* Обращение к авторизации */

    public function registration(){

        if(User::access()){
            return redirect()->route('profile');
        }
        return view('registration');
    }

    public function login(){

        if(User::access()){
            return redirect()->route('profile');
        }
        return view('login');   
    }

    
}
