@extends('template')

@section('content')
  <div style="font-size: 8pt">
    Posted by <b>{{ $data->authorObj->name }}</b> <br>
    at {{ \Carbon\Carbon::parse($data->created_at)->format('d F Y H:i') }} <br>
    @if ($data->author == \Auth::user()->id)
      <a href="/post/e/{{ $data->id }}">Edit Post</a> | <a href="/post/d/{{ $data->id }}">Delete Post</a>
    @endif
  </div>
  <br>
  {!! nl2br($data->content) !!}
  <br><br><br>
  <hr>
  <h4>Comments</h4>
  <form action="/post/{{ $data->id }}/comment" method="post">
    <label>Write Comment</label> <br>
    <textarea name="content" cols="100" rows="10"></textarea> <br>
    <button type="submit">Comment!</button>
  </form>

  <br> <br>
  @foreach ($data->comments as $comment)
    <div style="font-size: 10pt">
      <b>{{ $comment->user->name }}</b> <br>
      {!! $comment->content !!}
    </div>
    <br>
  @endforeach
@endsection