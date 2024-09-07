<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Khusus Admin</title>
</head>

<body>
    <script>
        const pwsc = sessionStorage.getItem('pswc');
        if (!pwsc || pwsc !== "teknikkuasai24") {
            const data = prompt('Harap Password Ya Massss');
            if (data !== "teknikkuasai24") {
                window.location.href = "/"
            } else {
                sessionStorage.setItem('pswc', 'teknikkuasai24')
            }
        }
    </script>

    <style>
        th,
        td {
            padding: 10px
        }
    </style>
    <table border="1">
        <tr>
            <th>
                No
            </th>
            <th>
                Nama
            </th>
            <th>
                Kelompok
            </th>
            <th>
                NIM
            </th>
            <th>
                Nomor
            </th>
            <th>
                TTL
            </th>
            <th>
                FT-FORMAL
            </th>
            <th>
                FT-SELFIE
            </th>
            <th> - </th>
        </tr>
        @foreach ($Data as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    {{ $data->nama }}
                </td>
                <td>
                    {{$data->kelompok}}
                </td>
                <td>
                    {{ $data->nim }}
                </td>
                <td>
                    {{ $data->no }}
                </td>

                <td>
                    {{ $data->ttl }}
                </td>
                <td>
                    <a href="{{ $data->fotoformal }}">{{ substr($data->fotoformal, -8) }}</a>

                </td>
                <td>
                    <a href="{{ $data->fotoselfie }}">{{ substr($data->fotoselfie, -8) }}</a>

                </td>
                <td>
                    <a href={{ '/delete?nim=' . $data->id }} onclick="return confirmAction('{{$data->nama}}')">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    <script>
        function  confirmAction(name) {
            let confirms = confirm(`Hapus : ${name} ?`);
            if (confirms) {
                return true;
            }else { return false}
        }
    </script>
</body>

</html>
