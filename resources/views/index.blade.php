@extends('layout')

@section('styles')
    
@endsection

@section('title')
    Utopy
@endsection

@section('content')

    {{--features--}}
    <div class="container px-4 py-5" id="hanging-icons">
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start">
            <div class="icon-square text-dark me-3">
                <i class="bi bi-clipboard-plus display-3"></i>
            </div>
            <div>
            <h2>Подать заявку</h2>
            <p>Вы можете сообщить о проблемах в вашем городе и мы постараемся помочь вам в кратчайшие сроки</p>
            <a href="#" class="btn btn-warning">
                Подать
            </a>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div class="icon-square text-dark me-3">
                <i class="bi bi-clipboard-check display-3"></i>
            </div>
            <div>
            <h2>Успешные проекты</h2>
            <p>Так-же вы можете ознакомиться с уже завершенными проектами нашей компании и оценить нашу работу</p>
            <a href="#" class="btn btn-warning">
                Взглянуть
            </a>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div class="icon-square text-dark me-3">
                <i class="bi bi-person-check-fill display-3"></i>
            </div>
            <div>
            <h2>Всегда в курсе</h2>
            <p>Вы в любой момент можете зайти в свой профиль и посмотреть свою статистику заявок</p>
            <a href="#" class="btn btn-warning">
                Зайти
            </a>
            </div>
        </div>
        </div>
    </div>
    {{--features--}}

    <div class="container">
        @foreach ($tasks as $item)
            <div class="col d-flex border-bottom py-2 flex-row">
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
        @endforeach
    </div>


@endsection

@section('scripts')
    
@endsection