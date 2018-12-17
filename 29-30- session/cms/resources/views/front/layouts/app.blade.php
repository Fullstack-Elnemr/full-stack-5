<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--    internet explorer compatibility meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--    first mobile meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CMS | @yield('page_title')</title>

    @yield('before_css')
    @include('front.layouts.parts.css')
    @yield('after_css')

</head>
<body>

<div class="contain">

    @include('front.layouts.parts.header')

    @yield('content')

    @include('front.layouts.parts.footer')
</div>
<!--    end contain-->
@yield('before_js')
@include('front.layouts.parts.js')
@yield('after_js')

</body>
</html>