<!DOCTYPE html>

<head>

    <title></title>
</head>
<body>
        @if(Auth::user()->userType == "User")
        <script> window.location.replace("/"); </script>
        @endif

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
        </div>
        
        <div>
            <button type="submit"> Create Question</button>
        </div>
    
    </form>
</body>
</html>