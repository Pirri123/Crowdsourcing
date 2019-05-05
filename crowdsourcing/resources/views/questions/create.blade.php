<!DOCTYPE html>

<head>

    <title>Create Question</title>
</head>
<body>

    <h1> Create new Question</h1>
    
    <form method="POST" action="/questions">
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
            <textarea name="QuestionText" placeholder="Question Description" required></textarea>
        </div> <br>

        <div > 
            <textarea name="ImgLocation" placeholder="Filename of the image" required></textarea>
        </div>

                <div class="form-group">
                        <label for="QuestionType">What is the answer?</label> <br>
                        <input type="radio" name="Answer" value="Yes" required> Yes<br>
                        <input type="radio" name="Answer" value="No" required> No<br>
                </div>

            <button type="submit"> Create Question</button>
        </div>
    
    </form>
</body>
</html>