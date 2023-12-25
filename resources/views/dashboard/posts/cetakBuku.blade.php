<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            justify-content: center;
            /* align-items: center; */
            height: 100vh;
            margin: 0;
        }

        .form-group {
            text-align: center;
            width: 95%;
            border: 1px solid #ccc;
            padding: 20px;
            box-sizing: border-box;
            position: relative; /* Menambahkan properti position */
        }

        .header-text {
            //position: absolute; 
            //top: 0; 
            //left: 50%;
            //transform: translateX(-50%);
            font-weight: bold;
            font-size: 20px;
        }

        table {
            margin: 20px auto 0; /* Menyesuaikan margin agar tabel memiliki ruang di bawahnya */
            width: 100%;
            border: 1px solid #ccc;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
    </style>
    <title>Laporan Data Buku</title>
</head>
<body>
    <div class="form-group">
        <p class="font-bold header-text">Laporan Data Penjualan Buku</p>
        <table class="static" rules="all">
            <!-- Isi tabel disini -->
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Kategori</th>
                <th>Harga</th>
            </tr>
            @foreach ($buku as $book)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->category->name }}</td>
                <td>{{ $book->price }}</td>
            @endforeach
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
