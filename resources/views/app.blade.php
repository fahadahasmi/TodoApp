<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://img.icons8.com/ios/50/000000/tasklist.png">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
    <link href-" {{ url('css/app.css') }} " rel="stylesheet">
    <title>Todo App</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="h-24 bg-gradient-to-r from-gray-400 via-black-500 to-white-500">

    <div class="container flex justify-center items-center center">
        @yield('content')
    </div>


</body>

</html>
