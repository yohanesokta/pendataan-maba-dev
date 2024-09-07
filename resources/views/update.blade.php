<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Website</title>
    <link rel="stylesheet" href="/res/update.css">
</head>

<body>
    <nav>
        <h2>
            Kumpulkan Web Klean
        </h2>
        <div class="user">
            <input type="number" name="nim" id="nim" placeholder="Masukan NIM">
            <button id="nim-submit">Cari</button>
        </div>
        <div class="container-loader" id="loader" style="display: none">
            <div class="loader"></div>
        </div>
    </nav>
    <form action="" id="form" method="POST">
        @csrf
    </form>


    <div class="info-container" id="info-container" style="display: none">
    </div>
    @if (session('suc'))
        <div class="info-container" id="info-container2">
            <div class="info">
                <img width="100" height="100" src="https://img.icons8.com/color/48/verified-account--v1.png"
                    alt="x" />
                <p>Berhasil Ditambahkan !</p>
                <button id="info" onclick="btnInfo2()">Tutup</button>
            </div>
        </div>
    @endif
    <script>
        function btnInfo2() {
            document.getElementById('info-container2').style.display = "none"
        }
    </script>
    <script src="/res/update.js"></script>
</body>

</html>
