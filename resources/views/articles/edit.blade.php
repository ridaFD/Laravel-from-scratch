@extends('layout')

@section('content')
<div class="container m-5">
    <form method="POST" action="/articles/{{  $article->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="title">Title</label>
          <input class="form-control" type="text" name="title"  value="{{ $article->title }}">

          @error('title')
            <text name="" id="" cols="30" rows="10" class='text-danger' >{{ $errors->first('title') }}</text>
          @enderror
        </div>
        <div class="form-group">
          <label for="caption">Caption</label>
          <input class="form-control" type="text" name="caption" value="{{ $article->caption }}">

          @error('caption')
            <text name="" id="" cols="30" rows="10" class='text-danger' >{{ $errors->first('caption') }}</text>
          @enderror
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <input class="form-control" type="text" name="body" value="{{ $article->body }}">

            @error('body')
            <text name="" id="" cols="30" rows="10" class='text-danger' >{{ $errors->first('body') }}</text>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
</div>

@endsection
