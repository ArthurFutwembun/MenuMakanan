<?php
require 'function.php';

$id = $_GET["id"];

$menu = query("SELECT * FROM daftar_menu WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
        </script>
    ";
    } else {
        echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';
        </script>
    ";
    }
}
?>
<link rel="stylesheet" href="css/styleTambah.css" type="text/css">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="wrapper">
        <a href="index.php"> back </a>
        <h1 class="title">Edit Menu</h1>
        <form action="" method="post">
            <ul class="form">
                <input type="hidden" name="id" value="<?= $menu["id"]; ?>">
                <li class="inputfield">
                    <label for="nama_menu">Nama :</label>
                    <input type="text" name="nama_menu" id="nama_menu" value="<?= $menu["nama_menu"]; ?>" class="input">
                </li>
                <li class="inputfield">
                    <label for="harga">Harga :</label>
                    <input type="text" name="harga" id="harga" value="<?= $menu["harga"]; ?>" class="input">
                </li>
                <li class="inputfield">
                    <label for="kategori">Kategori :</label>
                    <input type="text" name="kategori" id="kategori" value="<?= $menu["kategori"]; ?>" class="input">
                </li>
                <li class="inputfield">
                    <label for="rekomendasi">Rekomendasi :</label>
                    <div class="container">
                        <input type="radio" name="rekomendasi" value='N' class="input">No
                    </div>
                    <div class="container">
                        <input type="radio" name="rekomendasi" value="Y" class="input">Yes
                    </div>
                </li>
                <li class="inputfield">
                    <button type="submit" name="submit">Simpan</button>
                </li>
            </ul>
        </form>
    </div>
</body>

</html>