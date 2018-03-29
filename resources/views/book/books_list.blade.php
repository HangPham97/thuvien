<html>
<head>
    <title>View books</title>
</head>
<body>
<ul>

    @foreach($book as $one)
        <li>Name : {{$one->name}} | Author : {{$one->author}} </li>
    @endforeach
</ul>
</body>
</html>