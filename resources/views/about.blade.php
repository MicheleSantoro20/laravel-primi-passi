<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{height: 50px;}
    </style>
</head>
<body>
    <header>
        <div>
            <img src="{{$img}}" class="logo" alt="">
        </div>
        <div>{{$txt}}</div>
        <a href="{{route('homepage')}}"><button>Homepage</button></a>
    </header>


</body>
</html>