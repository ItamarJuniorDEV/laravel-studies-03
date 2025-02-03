<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
</head>

<body>

    <h1>Texto topo no layout</h1>

    @yield('content')

    <h1>Texto Bottom no layout</h1>
</body>

</html>