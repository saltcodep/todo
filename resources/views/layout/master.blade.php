<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', "เว็บไซต์ของฉัน")</title>
</head>
<body>
    <header> <a href="/">หน้าแรก </a>|<a href="/about"> เกียวกับ</a>|<a href="/contact"> ติดต่อ </a></header>
    <hr>
    <div>
        <h1>
            @yield ("content")
        </h1>
    </div>
    <hr>
    <p>credit by pix</p>
</body>
</html>
