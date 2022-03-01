@extends('layout')
@section('title')
    Utopy | Регистрация
@endsection

@section('content')

    <div class="container mt-4" style="max-width: 720px">
        <form method="POST" class="p-4 p-md-5 border rounded-3 bg-light" id = "form-block" enctype="multipart/form-data">
            <h2 class=" pb-2 w-100 text-center">Регистрация</h2>
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" placeholder="Имя" name="firstName">
                <label >Имя</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" placeholder="Фамилия" name="secondName">
                <label >Фамилия</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" placeholder="Отчество" name="lastName">
                <label >Отчество</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" placeholder="Адрес email" name="email">
                <label >Адрес email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" placeholder="Логин" name="login">
                <label >Логин</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" placeholder="Пароль" name="password">
                <label>Пароль</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password-check" placeholder="Повторить пароль">
                <label>Повторить пароль</label>
            </div>
            <div class="mb-3">
                <label class="form-label">Аватар профиля</label>
                <input type="file" class="form-control" name="avatar" aria-describedby="fileHelpId" accept=".jpg, .png, .jpeg">
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" id="terms-of-use-check"> Согласие на обработку персональных данных
                </label>
            </div>
            <input type="button" class="w-100 btn btn-lg btn-warning" id = "form-sub" onclick="reg_valid()" value="Зарегистрироваться">
        </form>
    </div>
    
@endsection

@section('scripts')
    <script src="js/auth.js"></script>
@endsection