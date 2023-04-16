@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $post->title }}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">
                {{ $date->format('F') }}/{{ $date->day }}/ {{ $date->year }} /{{ $date->format('H:i') }}
            </p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('storage/' . $post->main_image) }}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        {!! $post->content !!}
                    </div>
                </div>
            </section>
            <section>
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
            </section>
            <section class="mb-5">
                <h3>Comments ({{ $post->comments->count() }})</h3>
                @foreach ($post->comments as $c)
                    <div class="comment-text mb-3">
                        <span class="username">
                            <div>{{ $c->user->name }}</div>
                            <span class="text-muted float-right">
                                {{ $c->getDateAsCarbon()->diffForHumans() }}
                            </span>
                        </span>
                        {{ $c->message }}
                    </div>
                @endforeach
            </section>
            @auth
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        <section class="comment-section">
                            <form action="{{ route('page.comment.index', $post->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-12" data-aos="fade-up">
                                        <label for="comment" class="sr-only">Comment</label>
                                        <textarea name="message" id="comment" class="form-control" placeholder="Comment" rows="10">Comment</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" data-aos="fade-up">
                                        <input type="submit" value="Send Message" class="btn btn-warning">
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            @endauth
        </div>
    </main>
@endsection
