<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include 'C:\laravel\sosmed\resources\css\style.css'; ?></style>
    <script text="text/javascript" src="{{asset('/js/jquery-3.6.1.min.js')}}"></script>
</head>
<div>
<body>
        <button style="width:5%" onclick="location.href='/dashboard'">Home</button>

            <div style="font-size:10px" class="containpos">
            <h2 style="color:black">{{$post->authorObj->username}}</h2>
            <p class="kotak">{{$post->content}}</p>
            </div>

        <form  id="compost">
            @csrf
            <input type="text" name="comss" class="isian">
            <button style="width:5%" name="body" type="submit">enter</button>
        </form>
    </div>  


    <form id="colcom">
    @foreach($post->comments as $comment)
    @csrf 
    <div class="containcom">
        <h3 style="color:black">{{$comment->userm->username}}</h3>
        <p class="kotak">{{$comment->body}}</p>      
    </div>

        @if(Auth::user()->id ==$comment->user_id)
            <button onclick="location.href='/commentdel/{{$comment->id}}'" type="button">delete</button>
        
        @endif
    @endforeach
    </form>




</body>
<script type="text/javascript">
    $("#compost").submit(function(e){
        e.preventDefault();
        const active = $(this)
        $.ajax({
            url:"{{url('/savcom/'.$post->id)}}",
            type:"POST",
            data:$("#compost").serialize(),
            success:function(result){
                // $("#colcom").append();
                const comppe=`
                <div class="containcom">
                    <h3 style="color:black">${result.user_id}</h3>
                    <p class="kotak">${result.body}</p>      
                </div>
                    <button onclick="location.href='/commentdel/${result.id}'" type="button">delete</button>
                `
                $("#colcom").append(comppe);
            },
            error: function(result){
                console.log(result);
                alert("erorr : "+ result.responseText);
            }
        })
        return false;
    });
</script>
</div>
</html>