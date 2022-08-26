<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sosmed/resources/css/app.css">
    <link rel="stylesheet" href="C:\laravel\sosmed\resources\css\app.css">
    <link rel="stylesheet" href="sosmed\resources\css\style.css">
    <link rel="stylesheet" href="sosmed/resources/css/app.css">

</head>
<div class="all" style="border:border-box";>
<body style="display:flex; align-items: center; color:cyan; justify-content:center; min-height:100vh;">
<form action="/registration" method="post">
    @csrf
    <div class="container" >
        <h1 class="judul">Registration</h1>
        <div class="logincon">
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter Username" required>
        </div>
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter Password" required>
        </div>
        <div class="tombol">
            <button type="submit" for="sign_in">Sign In</button>
        </div>
    </div>
</form>
</body>
</div>
</html>

