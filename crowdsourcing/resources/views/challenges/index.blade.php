<!DOCTYPE html>
<html lang="en">
<head>

  <title>Document</title>
</head>
<body>
    <h1> Accounts</h1>
    @foreach ($challenges as $image )
    <br>
    <img src= {{ asset("img/questions/". $image-> ImgLocation)}}
    @endforeach
   
</body>
</html>