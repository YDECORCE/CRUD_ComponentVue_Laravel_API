<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />

    <title>Vue JS CRUD Operations in Laravel</title>

    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
</head>
    <style>
     .fade-leave-active {
        transition: all 2s;
     } 
     .fade-enter-active {
            
            transition: all 2s;
        }
    .fade-enter, .fade-leave-active {
        opacity: 0;
        }
    .fade-enter {
        
        transform: translateX(-100vw);
        }
    .fade-leave-active {
        transform: translateY(100vw);
        }    
    </style>

<body>
    <div id="app" style="position:absolute"></div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>

</html>