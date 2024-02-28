<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        table.static {
            position: relative;
            /* left: 3%; */
            border: 1px solid #543535;
        }
    </style>
    <title>Cetak</title>
</head>
<body>
    <div class="form-group">
        <p aligen="center"><b>Cetak Data Buku</b></p>
        <table class="table table-bordered" align="center" rules="all" border="1px" style="width: 95%">
            <tr class="table table-dark text-center">
                <th>Buku ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
            </tr>
            @foreach ($data as $item)
            <tbody class="text-center">
                <td>{{ $item->bukuid}}</td>
                <td>{{ $item->judul}}</td>
                <td>{{ $item->penulis}}</td>
                <td>{{ $item->penerbit}}</td>
                <td>{{ $item->tahunterbit}}</td>
            @endforeach
            </table>
        </div>
        <div>
            <a href="/perpustakaan" class="btn btn-outline-dark float-end border-1px" >Kembali</a>
        </div>
    <script type="text/javascript">
    window.print();
    </script>
    <br>
</body>
</html>