<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PENUGASAN BOOTING</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="stylesheet" href="/res/style.css">
</head>
<body>
    <div class="loading">
        <span class="loader"></span>
    </div>
    <div class="jumlah">
        <a href="{{route('json')}}" target="_blank" id="downloadLink" download="data.json">Download Data Terbaru</a>
    </div>
    <form action="/add" method="POST">
        @csrf
        <h4>Foto Formal</h4>
        <div class="container">
            <input type="file" id="file" name="file" onchange="upload">
        </div>
        <h4>Foto Selfie</h4>
        <div class="container">
            <input type="file" id="file2" name="file2" onchange="uploaded">
        </div>
        <div class="input-source">
            <input type="text" name="link" id="linklink" placeholder="Tunggu Sampe Terisi" disabled>
            <input type="text" name="link2" id="linklink2" placeholder="Tunggu Sampe Terisi" disabled>
            <input type="text" name="nama" id="nama" placeholder="nama" required>
            <input type="number" name="kelompok" id="kelompok" required placeholder="Kelompok (Nomor)">
            <input type="number" name="nim" id="nim" placeholder="NIM (Nomor)" required>
            <input type="text" name="alamat" id="alamat" placeholder="alamat" required>
            <input type="text" name="ttl" id="ttl" placeholder="TTL" required>
            <input type="text" name="nohp" id="nohp" placeholder="No HP" required>
        </div>

        <button id="button-s" type="submit" disabled>KIRIM</button>
    </form>

    <script src="/res/script.js"></script>
</body>
</html>
