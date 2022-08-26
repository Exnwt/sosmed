<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include 'C:\laravel\sosmed\resources\css\style.css'; ?></style>
</head>
<body>
    <div class="container">
        <div class="top">
            <div class="kosong"></div>

                <div class="nama">
                <tr>
                    <td><h2>{{\Auth::user()->username}}</h2></td>
                    <button onclick="location.href ='/login'">LogOut</button>
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

            @foreach ($posts as $post)
            @csrf
            <div style="font-size:10px" class="containpos">
            <h2 style="color:black">{{$post->authorObj->username}}</h2>
            <p class="kotak">{{$post->content}}</p>
            <button onclick="location.href='{{'/comment/'.$post->id}}'">comment</button>
            </div>

            @endforeach
            </div>
        </div>
            
    </div>
</body>
</html