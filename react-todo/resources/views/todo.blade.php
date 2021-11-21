<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Todo Application</h1>
        <a href="/todo.create">
            <button type="button" class="btn btn-primary">+</button>
        </a>
        <div class="list-group">
            @foreach($data as $item)
            @if($item['status'] == 0)
            <a href="/todo.edit/{{$item['id']}}" class="list-group-item list-group-item-action">{{$item['name']}}</a>
            @else
            <a href="/todo.edit/{{$item['id']}}"
                class="list-group-item list-group-item-action"><s>{{$item['name']}}</s></a>
            @endif
            @endforeach
        </div>
    </div>
</body>

</html>