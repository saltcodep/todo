<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <title>@yield('title', "เว็บไซต์ของฉัน")</title>
</head>
<body>
    <div class="container">
        @if(auth()->check())
        สวัสดีม {{auth()->user()->name}} | <a href="/logout">ออกจากระบบ</a>
        @else
        สวัสดีม บุคคลทั่วไป โปรด<a href="/login">เข้าสู้ระบบ</a>
        @endif
        <header> <a href="/"> หน้าแรก </a> | <a href="/login"> login </a> | <a href="/create"> create </a></header>
    <hr>
    <div>
            @yield ("content")
    </div>
    <hr>
    <p>credit by pix</p>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</body>
</html>
