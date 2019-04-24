<!DOCTYPE html>

<head>

    <title></title>
</head>
<body>

    <h1> Create new Proyect</h1>
    
    <form method="POST" action="/questions">
        {{csrf_field()}}
        <div>
            <input type="number" name="QuestionType" placeholder="1">

        </div>

        <div>
            <textarea name="QuestionText" placeholder="Question Description"></textarea>
        </div>
        
        <div>
            <button type="submit"> Create Question</button>
        </div>
    
    </form>
</body>
</html>