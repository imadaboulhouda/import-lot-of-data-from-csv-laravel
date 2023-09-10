<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data" action="{{ route('store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="">File csv</label>
            <input type="file" name="csv" class="form-control">
        </div>

        <button>Upload</button>
    </form>
</body>

</html>
