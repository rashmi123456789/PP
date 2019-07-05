<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
       
        <link href="https://fonts.googleapis.com/css?family=Laila" rel="stylesheet">
      
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        @include('main/layouts/header')
    </head>
    <body class="thebody">
        @include('main/layouts/navbar')

            @section('content')
                @show

         @include('main/layouts/footer') 
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
</html>