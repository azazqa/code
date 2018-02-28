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
    <style>
        .LNB-wrap{
            width: 74px;
            border-collapse: collapse;
            border:#E1E1E1;
        }
    </style>
    <script>

    </script>
    @yield('style')
    @yield('script')
</head>
<body>
<div class="site-wrap">
    <div class="Gnb-wrap"></div> {{--LNB Area--}}
    <div class="Top-Header-wrap">
        <div class="Top-wrap"></div> {{--top bar--}}
        <div class="Header-wrap"></div> {{--header--}}
    </div> {{--Top-Header Menu--}}
    <div class="content-wrap">

    </div> {{--Content--}}
    <div class="footer-wrap">

    </div> {{--Footer--}}
</div>
</body>
</html>