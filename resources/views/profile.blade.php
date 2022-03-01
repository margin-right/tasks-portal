@extends('layout')

@section('title')
    Utopy | Профиль
@endsection

@section('content')
   <div class="container shadow p-5 bg-light rounded mt-4">
        <div class="container d-flex flex-row">
            <img src="{{Storage::url($data['avatar'])}}" class=" w-25 rounded-circle">
            <div class="w-50 px-4">
                <h2>Профиль: {{$data['login']}}</h2>
                <div class="d-flex flex-row"><p class="mb-1">Фамилия:</p><span class="px-2 fw-bold">{{$data['secondName']}}</span></div>
                <div class="d-flex flex-row"><p class="mb-1">Имя:</p><span class="px-2 fw-bold">{{$data['firstName']}}</span></div>
                <div class="d-flex flex-row"><p class="mb-1">Отчество:</p><span class="px-2 fw-bold">{{$data['lastName']}}</span></div>
                <a href="newtask" class="btn btn-outline-warning mt-3 text-dark">Создать заявку</a>
                <a href="logout" class="btn btn-danger mt-3">Выйти</a>
            </div>
        </div>
        <h2 class="mt-4">Ваши заявки:</h2>
        @foreach ($tasks as $item)
            <div class="border-top py-4">
                <div class="col d-flex flex-row mb-3">
                    <img src="{{Storage::url($item->photo)}}" class=" w-25 rounded" alt="">
                    <div class=" px-4">
                        <h2 class="mt-3">{{$item->title}}</h2>
                        <p class="mt-4 w-75">{{$item->description}}</p>
                        <div class="mt-4 d-flex flex-row">
                            <p class="fw-bold">Дата подачи заявки:</p>
                            <p class="px-2">{{$item->created_time}}</p>
                            
                        </div>
                    </div>
                </div>
                <form action="removetask" method="POST">
                    @csrf
                    <input type="number" class="visually-hidden" name="id" value="{{$item->id}}">
                    <input type="submit" class="btn btn-danger" value="Удалить">
                </form>
            </div>
        @endforeach
   </div>
@endsection