@extends('layout')

@section('content')
<div class="container m-5">
    <form method="POST" action="/articles/{{  $article->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="title">Title</label>
          <input class="form-control" type="text" name="title"  value="{{ $article->title }}">
        </div>
        <div class="form-group">
          <label for="caption">Caption</label>
          <input class="form-control" type="text" name="caption" value="{{ $article->caption }}">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <input class="form-control" type="text" name="body" value="{{ $article->body }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
</div>

@endsection
