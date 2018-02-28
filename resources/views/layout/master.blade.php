<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-02-25
 * Time: 오후 4:31
 * discript: master layout
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('style')
    @yield('script')
</head>
<body>
    <div class="site-wrap">
        <div>@include('layout.gnb')</div> {{--Gnb Area--}}
        <div>
            <div>@include('layout.top_bar')</div>
            <div>@include('layout.header')</div>
        </div> {{--Top-Header Menu--}}
        <div>
            @include('layout.floating_banner')
            @yield('content')
        </div> {{--Content--}}
        <div>
            @include('layout.footer')
        </div> {{--Footer--}}
    </div>
</body>
</html>
