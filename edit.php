<?php include 'koneksi.php'; ?>
<?php
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM film WHERE id = $id");
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Film</title>
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
    <h2>Edit Data Film</h2>
    <form name="filmForm" method="POST" onsubmit="return validateForm();">
        <label>Judul</label>
        <input type="text" name="judul" value="<?= $data['judul'] ?>">
        <label>Genre</label>
        <input type="text" name="genre" value="<?= $data['genre'] ?>">
        <label>Sutradara</label>
        <input type="text" name="sutradara" value="<?= $data['sutradara'] ?>">
        <label>Tahun</label>
        <input type="number" name="tahun" value="<?= $data['tahun'] ?>">
        <label>Gmail</label>
        <input type="text" name="gmail" value="<?= $data['gmail'] ?>">
        <button type="submit" name="update">Update</button>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
        $genre = mysqli_real_escape_string($koneksi, $_POST['genre']);
        $sutradara = mysqli_real_escape_string($koneksi, $_POST['sutradara']);
        $tahun = (int)$_POST['tahun'];
        $gmail = mysqli_real_escape_string($koneksi, $_POST['gmail']);

        $update = mysqli_query($koneksi, "UPDATE film SET 
            judul='$judul', genre='$genre', sutradara='$sutradara', tahun='$tahun', gmail='$gmail'
            WHERE id=$id");

        if ($update) {
            echo "<p>Data berhasil diupdate. <a href='index.php'>Kembali</a></p>";
        } else {
            echo "<p>Gagal update data.</p>";
        }
    }
    ?>
</body>

</html>