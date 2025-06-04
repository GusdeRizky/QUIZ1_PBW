<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Tambah Film</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            max-width: 500px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
        }

        button {
            margin-top: 10px;
            padding: 8px 15px;
        }
    </style>
    <script src="validasi.js"></script>
</head>

<body>
    <h2>Tambah Data Film</h2>
    <form name="filmForm" method="POST" onsubmit="return validateForm();">
        <label>Judul</label>
        <input type="text" name="judul">
        <label>Genre</label>
        <input type="text" name="genre">
        <label>Sutradara</label>
        <input type="text" name="sutradara">
        <label>Tahun</label>
        <input type="number" name="tahun">
        <label>Gmail</label>
        <input type="text" name="gmail">
        <button type="submit" name="simpan">Simpan</button>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
        $genre = mysqli_real_escape_string($koneksi, $_POST['genre']);
        $sutradara = mysqli_real_escape_string($koneksi, $_POST['sutradara']);
        $tahun = (int)$_POST['tahun'];
        $gmail = mysqli_real_escape_string($koneksi, $_POST['gmail']);

        $query = mysqli_query($koneksi, "INSERT INTO film (judul, genre, sutradara, tahun, gmail)
                    VALUES ('$judul', '$genre', '$sutradara', '$tahun', '$gmail')");

        if ($query) {
            echo "<p>Film berhasil disimpan. <a href='index.php'>Kembali</a></p>";
        } else {
            echo "<p>Gagal menyimpan data.</p>";
        }
    }
    ?>
</body>

</html>