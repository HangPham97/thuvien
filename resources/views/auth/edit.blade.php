<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật thông tin người dùng</title>
        <link href="{{ asset('css/edit.css') }}" rel="stylesheet">
    </head>
    <body>
        <h1>Cập nhật thông tin người dùng</h1>
        @if(Session::has('message'))
            <p>
                {{Session::get('message')}}
            </p>
        @endif
        {!! Form::model($user, array('method'=>'put','route'=>['users.update',$user->id],'class'=>'form')) !!}
        {!! Form::label('Tên')!!}
        <p>{!! Form::text('name',null)!!}</p>
        {!! Form::label('Email')!!}
        <p>{!! Form::text('email',null) !!}</p><br>
        <form class="submit">
            <input type="submit" value="Cập nhật thông tin">
        </form>
        {{--{!! Form::submit('Cập nhật thông tin!')!!}--}}
        {!! Form::close() !!}
    </body>
</html>