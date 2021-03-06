@extends('layout')

@section('content')

    
    @foreach ($articles as $article)
  
        <div id="content justify-content-center">
            <div class="container">
                <div class="row justify-content-center p-5">
                    <div class="col-md-8">
                        <div class="title">
                        <a href="{{ $article->path() }}">
                            <h2>{{ $article->title }}</h2>
                        </a>
                            <span class="byline">{{ $article->caption }}</span> </div>
                    <p>
                        <img src="{{ asset('images/banner.jpg') }}" alt="" class="image image-full" /> 
                    </p>
                        <p>{{ $article->body }}</p>
                    </div>
                </div>
            </div>
        </div>

        
    @endforeach
    
    
@endsection
