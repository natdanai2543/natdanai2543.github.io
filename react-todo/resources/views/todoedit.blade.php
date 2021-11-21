<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <h1>Edit TODO</h1>
    <form method="POST" action="/todo.update" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $data['id'] }}">
        <div class="m-3 row">
            <label for="name" class="col-sm-2 col-form-label">TODO name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" value="{{ $data['name']}}" name="todoname">
            </div>
        </div>
        <div class="m-3 row form-check form-switch">
            <input name="status" class="form-check-input" type="checkbox" id="status"
                {{ $data['status'] == 0 ? "":"checked" }}>
            <label class="form-check-label" for="status">Status</label>
        </div>
        <input type="submit" class="m-3 btn btn-primary">
    </form>
    <form method="POST" action="/todo.delete" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $data['id'] }}">
        <input type="submit" class="m-3 btn btn-danger" value="delete">
    </form>
</body>

</html>