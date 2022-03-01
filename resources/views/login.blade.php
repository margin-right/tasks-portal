@extends('layout')
@section('title')
    Utopy | Вход
@endsection

@section('content')

    
    <div class="container mt-4" style="max-width: 720px">
        <form method="POST" class="p-4 p-md-5 border rounded-3 bg-light" id = "form-block">
            <h2 class=" pb-2 w-100 text-center">Вход</h2>
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" placeholder="Логин" name="login">
                <label >Логин</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" placeholder="Пароль" name="password">
                <label>Пароль</label>
            </div>
            <input type="submit" class="w-100 btn btn-lg btn-warning" value="Войти">
        </form>
    </div>
    
@endsection

