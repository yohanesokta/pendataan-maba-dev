<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendataan angkatan - tambah kan url aktif kalian supaya dapat dilihat teman lain</title>
    <link rel="stylesheet" href="/res/updatev2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <nav>
            <h2>
                Kumpulkan Web Klean
            </h2>
            <form action="" id="form-first" class="user">
                <input type="text" name="nim" id="nim" placeholder="Masukan NIM">
                <button id="nim-submit" type="submit">Cari</button>
            </form>
            <div class="container-loader" id="loader" style="display: none">
                <div class="loader"></div>
            </div>
        </nav>

        <form action="" id="form" method="POST">
            @csrf
        </form>

        <div id="nonfull">
            <h1><i class="fa-solid fa-circle-info"></i> mau lihat info lain ?</h1>
            <div class="card-container">
                <a href="/download" class="card">
                    <i class="fa-solid fa-download"></i>
                    <p>Download Data</p>
                </a>
                <a href="/web" class="card">
                    <i class="fa-regular fa-window-restore"></i>
                    <p>Lihat Web Teman</p>
                </a>
            </div>
        </div>
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
    </div>

    <script>
        function btnInfo2() {
            document.getElementById('info-container2').style.display = "none"
        }
    </script>
    <script src="/res/update2.js"></script>
</body>

</html>
