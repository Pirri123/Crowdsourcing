<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Welcome</title>
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
</head>
<body>
    @if(Auth::user()->userType == "Admin")
        <script>window.location = "/";</script>
    @endif

    <header>   
            <nav>  
                    <div class="logo">
                        <a href="" id="casa">
                            <img src="{{asset('img/home.jpeg')}}" alt="">Home
                        </a>
                    </div>
                    <div class="title">Welcome Admin</div>

                     <div class="logo">
                        <a href="" id="ayuda">
                            <img src="{{asset('img/user.jpeg')}}" alt="">Account
                        </a>
                     </div>
                    
            </nav> 
    </header>
    <main>  
        <h1>What do you want to do?</h1>
        <br>
        <div class="links">   
            <a href="questions" class="btn">See current questions</a>
            <a href="questions/create" class="btnG btn">Create a new question</a>
            <a href="options" class="btn">See current options</a>
            <a href="options/create" class="btn">Create new options</a>
            <a href="stats" class="btnG btn">See statistics</a>
        </div>
    </main>
</body>
</html>