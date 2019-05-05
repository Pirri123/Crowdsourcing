<!DOCTYPE html>

<head>

    <title>Edit Question</title>
</head>
<body>

    <h1> Edit Question</h1>
    
    <form action="/questions/edit/{{$question->id}}" method="POST">
        {{method_field('PATCH')}}
        {{csrf_field()}}
        <div>
                <div class="form-group">
                        <label for="QuestionType">Question Type</label> <br>
                        <input type="radio" name="QuestionType" value="1" required> Text-Text<br>
                        <input type="radio" name="QuestionType" value="2" required> Text-Image<br>
                        <input type="radio" name="QuestionType" value="3" required> Image-Image<br>
                </div>

        </div>

        <div>
        <textarea name="QuestionText" placeholder="Question Description" required>{{$question->QuestionText}}</textarea>
        </div> <br>

        <div > 
        <textarea name="ImgLocation" placeholder="Filename of the image" required>{{$question->ImgLocation}}</textarea>
        </div>

                <div class="form-group">
                        <label for="QuestionType">What is the answer?</label> <br>
                        <input type="radio" name="Answer" value="Yes" required> Yes<br>
                        <input type="radio" name="Answer" value="No" required> No<br>
                </div>

            <button type="submit"> Edit Question</button>
        </div>
    
    </form>
</body>
</html>