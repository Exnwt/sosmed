@extends('template')

@section('content')
  <form action="/post" method="post">
    <label>Create Post</label> <br>
    <textarea name="content" cols="100" rows="10"></textarea> <br>
    <button type="submit">Post!</button>
  </form>

  <br><br>
  @foreach ($posts as $post)
    <div style="font-size: 8pt">
      Posted by <b>{{ $post->authorObj->name }}</b> <br>
      at {{ \Carbon\Carbon::parse($post->created_at)->format('d F Y H:i') }} <br>
      <a href="/post/v/{{ $post->id }}">Show Comments</a>
      @if ($post->author == \Auth::user()->id)
        | <a href="/post/e/{{ $post->id }}">Edit Post</a> | <a href="/post/d/{{ $post->id }}">Delete Post</a>
      @endif
    </div>
    {!! nl2br($post->content) !!}
    <br><br><br><br><br>
  @endforeach
@endsection