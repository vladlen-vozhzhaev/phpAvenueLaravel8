@extends('template')
@section('title', $post->title)
@section('bgImage','/assets/img/'.$post->bgImage)
@section('content')
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    {{$post->content}}
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 my-3">
                    @if(Auth::check())
                        <form action="/addComment" method="POST">
                            @csrf
                            <input name="post_id" type="hidden" value="{{$post->id}}">
                            <div class="row">
                                <div class="col-sm-9">
                                    <input name="text" type="text" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <input type="submit" class="btn btn-primary btn-sm">
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </article>

@endsection
