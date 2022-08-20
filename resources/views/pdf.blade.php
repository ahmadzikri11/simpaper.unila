<!DOCTYPE html>

<head>
    <title>Contoh Surat Pernyataan</title>
    <meta charset="utf-8">
    <style>
        #judul {
            text-align: center;
        }

        #halaman {
            width: auto;
            height: auto;
            position: absolute;
            border: 1px solid;
            padding-top: 30px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 80px;
        }
    </style>

</head>

<body>
    <div id=halaman>
        <h3 id=judul>SURAT PERNYATAAN</h3>

        <p>Saya yang bertanda tangan di bawah ini :</p>

        <table>
            <tr>
                <td style="width: 30%;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $name }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">NPM</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"> {{ $npm }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Nomer Surat</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"> {{ $no_surat }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Fakultas/Jurusan</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $fakultas }} / {{ $prodi }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Bahan Pustaka</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">File Online</td>
            </tr>
        </table>

        <p>Judul : ___________________________________________________________________</p>

        <div style="width: 50%; text-align: left; float: right;">Purwodadi, 20 Januari 2020</div><br>
        <div style="width: 50%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>

        <img class="w-10 h-10" src="data:image/png;base64, {!! $qr !!}">

        <div style="width: 50%; text-align: left; float: right;">Arbrian Abdul Jamal</div>

    </div>
</body>

</html>
