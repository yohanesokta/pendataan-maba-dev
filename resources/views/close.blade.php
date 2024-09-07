<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CLOSED</title>
</head>
<body>
    <style>
        a{
            width:80px;
            font-weight: 900;
            height: auto;
            display: flex;
            font-size: 24pt;
            text-decoration: none;
        }
        a img{
            width: 50px;
        }
        a span{
            margin: auto;
            margin-left: 10px;
        }
    </style>
    <h1 style="text-align: center">Pengumpulan Ditutup 🎊</h1>
    <h3 style="text-align: center; color:rgb(63, 63, 63)">Bagi teman teman yang ingin memakai data untuk penugasan web individu bisa download di sini</h3>
    <a href="{{route('json')}}" target="_blank" id="downloadLink" download="data.json">
        <img src="https://cdn-icons-png.flaticon.com/512/12419/12419185.png" alt="">
      <span>Download</span>
    </a>
</body>
</html>
