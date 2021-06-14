@extends('template')

@section('title','Главная страница блога')
@section('bgImage','assets/img/home-bg.jpg')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach($posts as $post)
                <div class="post-preview">
                    <a href="/blog/{{$post->id}}">
                        <h2 class="post-title">{{ $post->title }}</h2>
                        <h3 class="post-subtitle">
                            {{ mb_substr($post->content, 0, 50)."..." }}
                        </h3>
                    </a>
                </div>
                <hr />
            @endforeach

        </div>
    </div>
</div>
<hr />
@endsection