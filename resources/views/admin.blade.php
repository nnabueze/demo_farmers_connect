
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{$title}}</title>


        <!-- Latest compiled and minified CSS -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:100,400,700' rel='stylesheet' type='text/css'>
        <link href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/style1.css')}}"> 



    </head>
    <body>

    
            @yield('content')


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
