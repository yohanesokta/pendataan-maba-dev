<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendataan angkatan - temukan website teman kalian dari berbagai kelompok</title>
    <link rel="stylesheet" href="/res/viewebv2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>


    <div class="main-container">
        <button id="home" onclick="window.location.href = '/update'"
            style="position: fixed; top:10px; left:10px; width:40px; height:40px; display:flex; z-index:999; border:none; outline:none; border-radius:10px;">
            <i class="fa-solid fa-house" style="margin: auto;"></i>
        </button>
        <nav>
            <h2>
                Filter Penelusuran
            </h2>
            <form action="" id="form-first" class="user">
                <select name="kelompok" id="kel-sec">
                    <option value="all">Semua</option>
                    <option value="1">Kelompok 1</option>
                    <option value="2">Kelompok 2</option>
                    <option value="3">Kelompok 3</option>
                    <option value="4">Kelompok 4</option>
                    <option value="5">Kelompok 5</option>
                    <option value="6">Kelompok 6</option>
                    <option value="7">Kelompok 7</option>
                    <option value="8">Kelompok 8</option>
                    <option value="9">Kelompok 9</option>
                    <option value="10">Kelompok 10</option>
                    <option value="11">Kelompok 11</option>
                    <option value="12">Kelompok 12</option>
                </select>
            </form>
            <div class="container-loader" id="loader" style="display: none">
                <div class="loader"></div>
            </div>
        </nav>
        <div class="table" id="table">
        </div>
    </div>
    <script src="/res/viewebv2.js"></script>

</body>

</html>
