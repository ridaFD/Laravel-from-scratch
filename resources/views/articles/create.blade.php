@extends('layout')

@section('content')
<div class="container m-5">
    <form method="POST" action="/articles">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input class="form-control" type="text" name="title" placeholder="Default input">
        </div>
        <div class="form-group">
          <label for="caption">Caption</label>
          <input class="form-control" type="text" name="caption" placeholder="Default input">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <input class="form-control" type="text" name="body" placeholder="Default input">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
</div>
@endsection
