<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title')</title>

</head>
<body>

    <h1>Master extended!</h1>
    <!-- If i dont use yield content here i will not be able to see nothing -->
    @yield('content')

</body>
</html>