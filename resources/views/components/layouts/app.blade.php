<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>
<body>
<header>\
    <div class="navcss">
        <h1>Smart-Solutions</h1>
        <x-nav-bar/>
    </div>
</header>
<main>

    {{$slot}}

</main>
<footer>
    <x-footer/>
</footer>
</body>
</html>
