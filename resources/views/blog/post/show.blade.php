@extends('layouts.main')

@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url( {{ asset('public/9sBJ5PpVSlUS1pjp75Ng6SBt2m2uWeJLRE2LHYXK.jpg') }} )">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>{{ $post->title }}</h1>
                        <h2 class="subheading">{{ $post->description }}</h2>
                        <p class="meta">#{{ $post->category->title }} | Posted
                            on {{ $date->format('F') }} {{ $date->day }}, {{ $date->year }}
                        </p>
                        <div>
                            <form action="{{ route('post.like.store', $post->id) }}" method="post">
                                @csrf
                                @auth()
                                <button type="submit" class="border-0 bg-transparent" style="color: white">
                                        @if (auth()->user()->likedPosts->contains($post->id))
                                            <i class="fa-solid fa-heart" style="color: red"></i>
                                        @else
                                            <i class="fa-regular fa-heart" style="color: red"></i>
                                        @endif
                                    {{ $post->likedUsers->count() }} likes |
                                </button>
                                @endauth
                                @guest()
                                    <i class="fa-regular fa-heart" style="color: red"></i>
                                    {{ $post->likedUsers->count() }} likes |
                                @endguest
                            <i class="fa-regular fa-comment" style="color: blue"></i>
                            {{ $post->comments->count() }} comments
                            </form>
                        </div>
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

                    <!--Button "Back"-->
                    <div class="d-inline-block justify-content mb-4 mt-3"><a class="btn btn-primary text-uppercase"
                                                                             href="{{ route('post') }}">← Back</a>
                    </div>

                    @if ($relatedPosts->count() > 0)
                    <!-- Divider-->
                    <hr class="my-4">


                    <!-- Related Posts-->
                    <section class="related-posts mt-5">
                        <h3 class="section-title mb-4 aos-init aos-animate" data-aos="fade-up">Related Posts</h3>
                        <div class="row">
                            @foreach($relatedPosts as $relatedPost)
                                <div class="col-md-4 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                                    <img src="{{ asset('public/AJNFHfjDEDqkoR6u4ZWbyGlRARxRiXhXw9XStRmB.jpg') }}"
                                         alt="related post" class="post-thumbnail" width="210" height="150"
                                         style="margin-bottom: 15px">
                                    <a href="{{ route('post.show', $relatedPost->id) }}">
                                        <h4 class="post-title">{{ $relatedPost->title }}</h4>
                                        <p class="post-subtitle"
                                           style="margin-top: 10px; font-size: small">{{ $relatedPost->description }}</p>
                                        <p class="post-category" style="font-style: italic; font-size: small">
                                            #{{ $relatedPost->category->title }} |
                                            <i class="fa-regular fa-heart" style="color: red"></i>
                                            {{ $relatedPost->likedUsers->count() }} likes,
                                            <i class="fa-regular fa-comment" style="color: blue"></i>
                                            {{ $relatedPost->comments->count() }} comments
                                        </p>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </section>
                    @endif

                    @if($post->comments->count() > 0)
                    <!-- Divider-->
                    <hr class="my-4">

                    <!--All Comments-->
                    <section class="comment-list mb-5 mt-5">
                        <h3 class="section-title mb-4 aos-init aos-animate" data-aos="fade-up">Comments
                            ({{ $post->comments->count() }})</h3>
                    @endif
                        @foreach($post->comments as $comment)
                            <div class="comment-text mb-3">
                                <span class="username">
                                    <div style="font-style: oblique"><b>
                                        {{ $comment->user->name }}</b>
                                    <span
                                        class="text-muted float-end">{{ $comment->dateCarbon->diffForHumans() }}</span>
                                    </div>
                                </span>
                                <!-- /.username -->
                                {{ $comment->message }}
                            </div>
                        @endforeach
                    </section>

                    <!-- Leave Comments-->
                    @auth()
                        <section class="comment-section mt-3">
                            <h3 class="section-title mb-4 aos-init aos-animate" data-aos="fade-up">Leave a Comment</h3>
                            <form action="{{ route('post.comment.store', $post->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-12 aos-init aos-animate mb-4" data-aos="fade-up">
                                        <label for="message" class="sr-only">Message</label>
                                        <textarea name="message" id="message" class="form-control"
                                                  placeholder="Enter your message" rows="10"></textarea>
                                    </div>
                                </div>
                                {{--                            <input type="hidden" name="post_id" value="{{ $post->id }}">--}}
                                <div class="row">
                                    <div class="col-12 aos-init aos-animate mt-4 mb-4" data-aos="fade-up">
                                        <input type="submit" value="Send Message"
                                               class="btn btn-primary text-uppercase">
                                    </div>
                                </div>
                            </form>
                        </section>
                    @endauth

                </div>
            </div>
        </div>
    </article>
@endsection
