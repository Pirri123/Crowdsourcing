<!DOCTYPE html>
<html lang="en">
<head>

    <title>Statistics</title>
</head>
<body>
    @if(Auth::user()->userType == "Admin")
        <script>window.location = "/";</script>
    @endif

</body>
</html>