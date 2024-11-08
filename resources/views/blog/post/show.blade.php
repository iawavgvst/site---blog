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
                        <p class="meta">#{{ $post->category->title }} | Posted
                            on {{ $date->format('F') }} {{ $date->day }}, {{ $date->year }} • {{ $date->format('h:i') }}
                        </p>
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
                    <div>
                        <p>{{ $post->content }}</p>
                        <p>{{ $post->content }}</p>
                        <p>{{ $post->content }}</p>
                        <h2 class="section-heading">The most certain way to succeed is always to try just one more
                            time</h2>
                        <a href="#!"><img class="img-fluid" src="{{ asset('assets/img/post-sample-image.jpg') }}"
                                          style="margin-top: 15px"
                                          alt="..."/></a>
                        <span
                            class="caption text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                        <p>{{ $post->content }}</p>
                        <p>{{ $post->content }}</p>
                        <p>{{ $post->content }}</p>
                        <p>{{ $post->content }}</p>
                    </div>

                    <!-- Divider-->
                    <hr class="my-4">

                    <!-- Related Posts-->
                    <section class="related-posts mt-5">
                        <h3 class="section-title mb-4 aos-init aos-animate" data-aos="fade-up">Related Posts</h3>
                        <div class="row">
                            @foreach($relatedPosts as $post)
                                <div class="col-md-4 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                                    <img src="#" alt="related post" class="post-thumbnail">
                                    <a href="{{ route('post.show', $post->id) }}">
                                        <h4 class="post-title">{{ $post->title }}</h4>
                                        <p class="post-subtitle" style="font-size: small">{{ $post->description }}</p>
                                    </a>
                                    <p class="post-category" style="font-style: italic; font-size: small">
                                        #{{ $post->category->title }} |
                                        <i class="fa-regular fa-heart" style="color: red"></i>
                                        {{ $post->likedUsers->count() }} likes
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </section>

                    <!-- Divider-->
                    <hr class="my-4">

                    <!-- Pager-->
                    <div class="d-inline-block justify-content mt-4 mb-4"><a class="btn btn-primary text-uppercase"
                                                                        href="{{ route('post') }}">← Back</a>
                    </div>

                </div>
            </div>
        </div>
    </article>
@endsection
