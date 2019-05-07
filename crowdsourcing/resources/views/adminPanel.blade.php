@extends ('layouts.app')

@section("estilos")
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">

@endsection
<body>
        @if(Auth::user()->userType == "User")
        <script> window.location.replace("/"); </script>
    @endif
    @section ('content')
    <main  style="text-align:center">  
        <div class="title">Welcome Admin</div>
        <div class="links">
            <a href="/questions" class="btnG btn">See questions</a>   
            <a href="/questions/create" class="btnG btn">Create a new question</a>
            <a href="/stats" class="btnG btn">See statistics</a>
        </div>
    </main>
    @endsection
</body>



{{--  @extends ('layouts.app')

@section ('content')
    <h2 style="text-align: center; height: 400px; margin-top: 90px;">Welcome Admin.jpg</h2>
    <div class="links">   
        <a href="" class="btnG btn">Create a new question</a>
        <a href="" class="btn">Image - Image Challenge</a>
        <a href="" class="btn">Text - Text Challenge</a>
        <a href="" class="btn">Image - Text Challenge</a>
        <a href="" class="btnG btn">See statistics</a>
        <a href="" class="btnG btn">logout</a>
    </div>
@endsection --}}

