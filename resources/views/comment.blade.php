<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include 'C:\laravel\sosmed\resources\css\style.css'; ?></style>

</head>
<div>
<body>
        <button style="width:5%" onclick="location.href='/dashboard'">Home</button>

            <div style="font-size:10px" class="containpos">
            <h2 style="color:black">{{$post->authorObj->username}}</h2>
            <p class="kotak">{{$post->content}}</p>
            </div>

        <form action="/savcom/{{$post->id}}" method="post">
            @csrf
            <input type="text" name="comss" class="isian">
            <button style="width:5%" name="body" type="submit">enter</button>
        </form>
    </div>  
    @foreach($post->comments as $comment)
    @csrf 

    <div class="containcom">
        <h3 style="color:black">{{$comment->userm->username}}</h3>
        <p class="kotak">{{$comment->body}}</p>      
    </div>

        @if(Auth::user()->id ==$comment->user_id)
            <button onclick="location.href='/commentdel/{{$comment->id}}'">delete</button>
        
        @endif

    @endforeach



</body>
</div>
</html>