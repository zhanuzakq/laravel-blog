@extends('front.app')

@section('header')
    @include('front.posts.header.header')
@show

@section('content')
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <p>
                        <img src="{{env('APP_URL').'/storage/'.$post->image ?? ''}}" alt="" style="box-sizing: border-box; width: 100%;">
                    </p>
                    <p>
                        
                        {!!$post->body ?? '' !!}
                    </p>
                </div>
            </div>
        </div>
    </article>
@show