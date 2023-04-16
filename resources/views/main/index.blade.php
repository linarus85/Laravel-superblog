@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ 'storage/' . $post->main_image }}" alt="blog post">
                            </div>
                            <div class="d-flex justify-content-between">
                                @auth
                                    <form action="{{ route('page.like.index', $post->id) }}" method="POST">
                                        @csrf
                                        <span>{{ $post->liked_users_count }}</span>
                                        <button type="submit" class="border-0 bg-transparent">
                                            @if (auth()->user()->likedPost->contains($post->id))
                                                <i class="fas fa-heart"></i>
                                            @else
                                                <i class="far fa-heart"></i>
                                            @endif
                                        </button>
                                    </form>
                                @endauth
                                @guest
                                    <span>{{ $post->liked_users_count }}</span>
                                    <i class="far fa-heart"></i>
                                @endguest
                            </div>
                            <p class="blog-post-category">{{ $post->category->title }}</p>
                            <a href="{{ route('page.index', $post->id) }}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{ $post->title }}</h6>
                            </a>
                        </div>
                    @endforeach
                </div>
            </section>
            <div class="row">
                <div class="m-auto">{{ $posts->links() }}</div>
            </div>
            <div class="col-md-4 sidebar" data-aos="fade-left">
                <div class="widget widget-post-list">
                    <h5 class="widget-title">Popular posts</h5>
                    <ul class="post-list">
                        @foreach ($liked as $l)
                            <li class="post">
                                <a href="{{ route('page.index', $l->id) }}" class="post-permalink media">
                                    <img src="{{ 'storage/' . $l->main_image }}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">{{ $l->title }}</h6>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </main>
@endsection
