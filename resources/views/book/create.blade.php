<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Thêm sách</title>
        <style>

            input {margin-bottom: 30px; padding: 10px}
            p {margin-left: 20px;}

        </style>

    </head>
    <body>
    <h1>Thêm sách mới</h1>
    {!! Form::open(['url' => 'books']) !!}
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name') !!} <br>

        {!! Form::label('author','Author:') !!}
        {!! Form::text('author') !!} <br>

        {!! Form::label('image','Image:') !!}
        {!! Form::text('image') !!} <br>

        {!! Form::label('category','Category:') !!}
        {!! Form::text('category') !!} <br>

        {!! Form::label('number','Number:') !!}
        {!! Form::text('number') !!} <br>

        {!! Form::submit('Them moi')!!}
    {!! Form::close() !!}
    </body>
</html>