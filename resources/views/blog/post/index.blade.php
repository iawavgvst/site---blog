@extends('layouts.main')

@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url( {{ asset('assets/img/about-bg.jpg') }} )">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">

                <!-- Post preview-->
                <div class="post-preview">
                    @foreach($likedPosts as $post)
                        <a href="{{ route('post.show', $post->id) }}">
                            <h2 class="post-title">{{ $post->title }}</h2>
                            <h3 class="post-subtitle">{{ $post->description }}</h3>
                        </a>
                        <p class="post-meta">#{{ $post->category->title }} | Posted on {{ $date->format('F') }} {{ $date->day }}, {{ $date->year }}</p>
                        <div class="mb-5">
                            <form action="#!">
                                <button type="submit" class="border-0 bg-transparent">
                                    <i class="fa-regular fa-heart" style="color: red"></i>
                                    {{ $post->likedUsers->count() }} likes |
                                </button>
                                <a href="{{ route('post.show', $post->id) }}">
                                <i class="fa-regular fa-comment" style="color: blue"></i>
                                {{ $post->comments->count() }} comments
                                </a>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
