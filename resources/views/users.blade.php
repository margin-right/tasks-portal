@extends('layout')

@section('content')
    <div class="container">
        <h2 class="py-3">Пользователи</h2>
        @foreach ($users as $user)
            <div class="container d-flex flex-row py-3 border-top">
                <img src="{{Storage::url($user->avatar)}}" class=" w-25 rounded-circle">
                <div class="w-50 px-4">
                    <h2>Профиль: <a href="{{route('users.show', $user)}}">{{$user->login}}#{{$user->id}}</a></h2>
                    <div class="d-flex flex-row"><p class="mb-1">Фамилия:</p><span class="px-2 fw-bold">{{$user->secondName}}</span></div>
                    <div class="d-flex flex-row"><p class="mb-1">Имя:</p><span class="px-2 fw-bold">{{$user->firstName}}</span></div>
                    <div class="d-flex flex-row"><p class="mb-1">Отчество:</p><span class="px-2 fw-bold">{{$user->lastName}}</span></div>   
                    <form method="post" action="{{route('users.destroy', $user)}}">
                        @method('DELETE')
                        @csrf
                        <input type="submit" class="btn btn-danger mt-3" value="удалить">
                    </form>
                    
                </div>
            </div>
        @endforeach
    </div>
@endsection