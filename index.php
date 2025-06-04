<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Daftar Film</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: blue;
        }

        .tambah {
            margin-bottom: 15px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <h1>Daftar Film</h1>
    <a class="tambah" href="create.php">+ Tambah Film</a>
    <table>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Sutradara</th>
            <th>Tahun</th>
            <th>Gmail</th>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM film ORDER BY id DESC");
        $no = 1;
        while ($data = mysqli_fetch_assoc($query)) {
            echo "<tr>
                <td>$no</td>
                <td>{$data['judul']}</td>
                <td>{$data['genre']}</td>
                <td>{$data['sutradara']}</td>
                <td>{$data['tahun']}</td>
                <td>{$data['gmail']}</td>
                <td>
                    <a href='edit.php?id={$data['id']}'>Edit</a> |
                    <a href='delete.php?id={$data['id']}' onclick='return confirm(\"Yakin ingin hapus?\")'>Hapus</a>
                </td>
            </tr>";
            $no++;
        }
        ?>
    </table>
</body>

</html>