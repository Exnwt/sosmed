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
                    <td><h2>isi nama</h2></td>
                    <td><button onclick="location.href ='/'";>LogOut</button></td>
                </tr>
            </div>
        </div>
        <div class="isi">
            @foreach($posts as $post) 
            @csrf
            <tr>
                <td>{{$post->author}}</td>
                <td>{{$post->content}}</td>
            </tr>  
            @endforeach     
        </div>
            
        </div>
    </div>
</body>
</html>