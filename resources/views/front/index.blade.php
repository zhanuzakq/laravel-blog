@extends('front.app')

@section('header')
    @include('front.header.header')
@show

@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @forelse ($posts as $post)
            <div class="post-preview">
                <a href="{{route('post.show', $post->slug ?? '')}}">
                    <h2 class="post-title">
                    {{$post->title ?? ''}}
                    </h2>
                    <h3 class="post-subtitle">
                    {{$post->excerpt ?? ''}}
                    </h3>
                </a>
                <p class="post-meta">
                    Опубликовано
                    <a href="#">Админ</a>
                    {{$post->created_at ?? ''}}
                </p>
            </div>
            <hr>
            @empty
                
            @endforelse
            
            <!-- Pager -->
            <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Пред &rarr;</a>
            </div>
        </div>
        </div>
    </div>
@show