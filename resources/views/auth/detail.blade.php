<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hiển thị thông tin người dùng</title>
    </head>
    <body>
    @if(Auth::check())
        Xin chào, {{Auth::user()->name}}!
        <h3>Thông tin người dùng</h3>
        <ul>
            <li>Tên:{{Auth::user()->name}}</li>
            <li>Email:{{Auth::user()->email}}</li>

        </ul>
    @endif
    </body>
</html>