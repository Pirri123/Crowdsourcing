
@extends ('layouts.app2')
<body>
  @section ('content')
      @if(Auth::user()->userType == "User")
      <script> window.location.replace("/"); </script>
      @endif

  <h1> Create new Question</h1>
  
  <form method="POST" action="/questions" style="margin:auto; width:500px;">
      {{csrf_field()}}
      <div style="text-align:center;">
              <div class="form-group" style="width: 400px; margin:auto;">
                      <label style="font-size: 20px;"for="QuestionType"1> Question Type </label> <br>
                      <input type="radio" name="QuestionType" value="1" required> Text-Text<br>
                      <input type="radio" name="QuestionType" value="2" required> Text-Image<br>
                      <input type="radio" name="QuestionType" value="3" required> Image-Image<br>
                  </div>

           <div class="form-group" style="width: 400px; margin:auto;" >
              <br>
              <textarea class="form-control"  id="QuestionText" name="QuestionText" placeholder="Question Description" required></textarea>
          </div>

          <div class="form-group" style="width: 400px; margin:auto;" >
                <br>
                <textarea class="form-control"  id="QuestionText" name="ImgLocation" placeholder="Filename of the image" required></textarea>
            </div>

            <div class="form-group" style="width: 400px; margin:auto;">
                    <label style="font-size: 20px;"for="QuestionType"1> Question Answer </label> <br>
                    <input type="radio" name="Answer" value="Yes" required> Yes<br>
                    <input type="radio" name="Answer" value="No" required> No<br>
                </div>

               <button type="submit"> Create Question</button>
          <div>
              
          </div>
      </div>
  
  </form>
@endsection
</body>
