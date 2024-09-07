<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PENUGASAN LIHAT</title>
</head>
<body>
    <style>
        .name{
            widows: 100%;
            padding: 10px;
            color: black;
            font-weight: bold;
            font-size: 24;
            border: 3px solid gray;
            margin-bottom: 5px;
        }
    </style>
    @foreach ($Data as $data)
    <div class="name">
        {{$data->nama}}
    </div>
    @endforeach
</body>
</html>
