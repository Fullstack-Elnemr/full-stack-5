<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | @yield('title')</title>

    @yield('before_css')
    @include('backend.layouts.parts.css')
    @yield('after_css')

</head>

<body>

<div id="wrapper">

    @include('backend.layouts.parts.header')

    @yield('wrapper')

    @yield('after_wrapper')

</div>
<!-- /#wrapper -->

@yield('before_js')
@include('backend.layouts.parts.js')
@yield('after_js')



</body>

</html>