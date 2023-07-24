<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
</head>
<body>
    <ul>
        <li>
            <a href="{{ route('category.index') }}">Categories</a>
        </li>
        <li>
            <a href="{{ route('product.index') }}">Products</a>
        </li>
    </ul>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>