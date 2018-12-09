<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{ Request::root() }}/css/base.css">
</head>
<body>
    @if(true)
        <h1>Welcome , {{ $id }}</h1>
    @else
        <h1>Welcome </h1>
    @endif

    <a href="{{ route('home') }}">Main</a>

</body>
</html>