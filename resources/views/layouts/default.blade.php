<!DOCTYPE>
<html>
    <head>
        <title>@yield('ti-title')</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            .flex-container {
                 display: flex;
                height: 100%;
                justify-content: center;
                }
            .flex-item {
                margin: auto;
            }
        </style>
    </head>
    <body>
        <div class="flex-container">
            @yield('content')
        </div>
        @yield('script')
    </body>
</html>
