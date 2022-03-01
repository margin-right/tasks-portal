@extends('layout')


@section('title')
    Utopy | Новая заявка
@endsection

@section('content')
    <div class="container">

        <div class="container mt-4" style="max-width: 720px">
            <form method="POST" class="p-4 p-md-5 border rounded-3 bg-light" id = "form-block" enctype="multipart/form-data">
                <h2 class=" pb-2 w-100 text-center">Новая заявка</h2>
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Имя" name="title">
                    <label >Заголовок</label>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Описание</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                  <label for="category" class="form-label">Категории</label>
                  <select class="form-control" name="category" id="category">
                    @foreach ($category as $item)
                        <option>{{$item->name}}</option>
                    @endforeach
                    
                  </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Фотограция</label>
                    <input type="file" class="form-control" name="photo" multiple accept=".png, .jpeg, .jpg" >
                </div>
                <input type="submit" class="w-100 btn btn-lg btn-warning" value="Создать">
            </form>
        </div>
    </div>
@endsection

