
@extends ('layouts.app2')



<body>
@section ('content')
        <form action="/questions/edit/{{$question->id}}" method="POST" style="margin:auto; width:500px;">
                {{ csrf_field() }}

                <div style="text-align:center;">
                    <div class="form-group" >
                         <div class="title">Tipo de Pregunta</div>
                        <br>

                            <input type="radio" name="QuestionType" value="1" required> Text - Text<br>
                            <input type="radio" name="QuestionType" value="2" required> Text - Image<br>
                            <input type="radio" name="QuestionType" value="3" required> Image - Image<br>

                    </div>
                
                    <div class="form-group" style=";width: 400px; margin:auto;" >
                        <label style="font-size: 20px;"for="QuestionText"1> Texto de la Pregunta </label>
                        <textarea class="form-control"  id="QuestionText" name="QuestionText" required></textarea>
                    </div>

                    <div>
                        <br>
                        <button type="submit" style="background-color: #6cb2eb;"class="btn btn-template-main" >Actualizar</button>
                        
                    </div>

                </div>
                    
                    
            </form>
            @endsection
</body>
