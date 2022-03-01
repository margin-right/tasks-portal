<?php

namespace App\Http\Controllers;

use App\Helpers\Html;
use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function newView(){
        
        if(User::access()){
            $categories = Category::get('name');
            return view('newtask', ['category' => $categories]);
        }
        return redirect()->route('index');
    }

    public function create(Request $request){

        $photo = $request->file('photo')->store('public/tasks');
        $input = $request->all();
        $input['photo'] = $photo;
        $input['category_id'] = Category::id($input['category']);
        unset($input['category']);
        Task::add($input);

        return redirect()->route('profile');
    }

    public function remove(Request $request){

        
        if(User::access()){
            Task::remove($request->get('id'));
            Html::alert('Запись успешно удалена', 'success');
            return redirect()->route('profile');
        }
    }
}

