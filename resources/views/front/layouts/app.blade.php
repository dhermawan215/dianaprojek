<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('front.layouts.style')
</head>

<body>
    @include('front.layouts.navbar')
    @yield('contents')

    @include('front.layouts.footer')
    @include('front.layouts.js')
    @stack('cscripts')
</body>

</html>
