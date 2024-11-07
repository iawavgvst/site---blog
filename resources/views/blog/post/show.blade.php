@extends('layouts.main')

@section('content')
<!-- Page Header-->
<header class="masthead" style="background-image: url( {{ asset('assets/img/post-bg.jpg') }} )">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>{{ $post->title }}</h1>
                    <h2 class="subheading">{{ $post->description }}</h2>
                    <span class="meta">{{ $post->category->title }}</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>{{ $post->content }}</p>
                <p>{{ $post->content }}</p>
                <p>{{ $post->content }}</p>
                <h2 class="section-heading">The most certain way to succeed is always to try just one more time</h2>
                <a href="#!"><img class="img-fluid" src="{{ asset('assets/img/post-sample-image.jpg') }}" style="margin-top: 15px"
                                  alt="..."/></a>
                <span class="caption text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                <p>{{ $post->content }}</p>
                <p>{{ $post->content }}</p>
                <p>{{ $post->content }}</p>
                <p>{{ $post->content }}</p>
                <!-- Pager-->
                <div class="d-inline-block justify-content mb-4"><a class="btn btn-primary text-uppercase"
                                                                    href="{{ route('post') }}">← Back</a>
                </div>
            </div>
        </div>
    </div>
</article>
@endsection
