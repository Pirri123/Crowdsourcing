<!DOCTYPE html>
<html lang="en">
<head>

  <title>Challenge!</title>
</head>
<body>
    @if($id == count($challenges))
    <h1> Ya no hay más preguntas, vuelva más tarde! </h1>
    @else
        <h1> {{$challenges[$id]->QuestionText}} </h1>
    
        <!--<h1> Accounts</h1>-->
        <img src = {{asset("img/questions/" . $challenges[$id]->ImgLocation)}}
        <br>
        <img src = {{asset("img/questions/" . $challenges[$id+1]->ImgLocation)}}
    
        <div>
        <br>

        @if($id >= 2)
        <a href="/{{Request::segment(1)}}/{{$id-2}}"><button type="button" class="btn btn-xs btn-info" >Anterior</button></a>
        @endif
        @if($id < (count($challenges) - 1))
        <a href="/{{Request::segment(1)}}/{{$id+2}}"><button type="button" class="btn btn-xs btn-info" >Siguiente</button></a>
        @endif
    @endif
      
    </div>
</body>
</html>