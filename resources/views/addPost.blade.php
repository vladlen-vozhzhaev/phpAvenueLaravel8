@extends('template')
@section('title','Добавление статью')
@section('bgImage','assets/img/post-bg.jpg')
@section('content')
    <div class="container">
        <form action="/addPost" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="mb-3">
                <input type="text" name="title" class="form-control" placeholder="Заголовок статьи">
            </div>
            <div class="mb-3">
                <textarea name="content" placeholder="Контент" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" value="Добавить статью">
            </div>
        </form>
    </div>
@endsection