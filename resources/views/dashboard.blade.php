<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include 'D:\xampp\htdocs\laravel\sosmed1\resources\css\style.css'; ?></style>
</head>
<body>
    <div class="container">
        <div class="top">
            <div class="kosong"></div>
            <div class="nama">
                <tr>
                    <td><h2>isi nama</h2></td>
                    <td><button onclick="location.href ='/'";>LogOut</button></td>
                </tr>
            </div>
        </div>
        <div class="isi">
            <form action="/post" method="post">
                @csrf
                <label>Create Post</label> <br>
                <textarea name="content" cols="100" rows="10"></textarea> <br>
                <button type="submit">Post!</button>
            </form>


            @foreach ($Post as $posts)
            @csrf
            <div style="font-size:10px">
                Posted by <b>{{ $post->authorObj->name }}</b> <br>
                at {{ \Carbon\Carbon::parse($post->created_at)->format('d F Y H:i') }} <br>
                <a href="/post/v/{{ $post->id }}">Show Comments</a>
                @if ($post->author == \Auth::user()->id)
                <a href="/post/e/{{ $post->id }}">Edit Post</a> | <a href="/post/d/{{ $post->id }}">Delete Post</a>
                @endif
            </div>
            {!! n12br($post->content)!!}
            <br><br><br><br><br>
            @endforeach
        </div>
            
    </div>
</body>
</html