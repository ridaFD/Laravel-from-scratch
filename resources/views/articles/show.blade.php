@extends('layout')

@section('content')

    <div id="content justify-content-center">
        <div class="container">
            <div class="row justify-content-center p-5">
                <div class="col-md-8">
                    <div class="title">
                        <h2>{{ $article->title }}</h2>
                        <span class="byline">{{ $article->caption }}</span> </div>
                    <p>
                        <img src="{{ asset('/images/banner.jpg') }}" alt="" class="image image-full" /> 
                    </p>
                    <p>{{ $article->body }}</p>

                    <p>
                        {{ $article }}
                        {{ $article->tags }}
                        @foreach ($article->tags as $tag)
                            <a href="{{ route('articles.index', ['tag' => $tag->name]) }}">{{ $tag->name }}</a>
                        @endforeach
                    </p>

                </div>
            </div>
        </div>
    </div>
    
@endsection
