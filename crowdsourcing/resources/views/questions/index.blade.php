@extends ('layouts.app')
<body>
        @if(Auth::user()->userType == "User")
        <script> window.location.replace("/"); </script>
        @endif
    @section ('content')
    
<div class="row" >
    <fieldset style="margin: auto;">
        
        <div class="table-responsive" >

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Type</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody id="index">
                    @foreach($questions as $question)
                        <tr>
                            <td>{{$question->QuestionText}}</td>
                            @if($question->QuestionType == '1')
                            <td>Text-Text</td>
                            @elseif($question->QuestionType == '2')
                            <td>Text-Image</td>
                            @else
                            <td>Image-Image </td>
                            @endif
                            <td><a href="/questions/edit/{{$question->id}}"><button type="button" class="btn btn-xs btn-info" >Edit</button></a></td>
                            <td><a href="/questions/delete/{{$question->id}}" id="deleteQuestion"><button type="button" class="btn btn-xs btn-danger" >Delete</button></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </fieldset>
</div>
    @endsection
</body>
