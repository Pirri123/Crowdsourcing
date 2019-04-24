<!DOCTYPE html>
<html lang="en">
<head>

  <title>Challenge!</title>
</head>
<body>
    <h1> {{$challenges[$questionIndex["First"]]->QuestionText}} </h1>
   
    <!--<h1> Accounts</h1>-->
    <img src = {{asset("img/questions/" . $challenges[$questionIndex["First"]]->ImgLocation)}}
    <br>
    <img src = {{asset("img/questions/" . $challenges[$questionIndex["First"] +1]->ImgLocation)}}
   
    <div>
      
        <button href="{{ url()->previous() }}" class="btn btn-default">Back</button>
        <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>

      
    </div>
</body>
</html>