<?php
require 'function.php';

$daftar_menu = query("SELECT * FROM daftar_menu");

if (isset($_POST["cari"])) {
    $daftar_menu = cari($_POST["keyword"]);
}
?>
<div class="tabel">
    <h1>DAFTAR MENU MAKANAN DAN MINUMAN</h1>

    <form action="" method="post">
        <input type="text" name="keyword" placeholder="" autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    <br><br>
    <table id="table_view">
        <tr>
            <th>Id</th>
            <th>Nama Menu</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Rekomendasi</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($daftar_menu as $row) : ?>
            <tr>
                <td><?php echo $row["id"] ?></td>
                <td class="test"><?php echo $row["nama_menu"] ?></td>
                <td id="harga"> IDR <?php echo number_format($row["harga"]) ?></td>
                <td class="test"><?php echo $row["kategori"] ?></td>
                <td><?php echo $row["rekomendasi"] ?></td>
                <td class="test">
                    <a href="ubah.php?id=<?= $row["id"]; ?>" class="ubah">Edit</a> /
                    <a href="hapus.php? id=<?= $row["id"]; ?>" onclick="return confirm('Ingin menghapus menu?');" class="hapus">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="tambahMenu.php" class="tambah">Tambah Menu</a>
</div>

<link rel="stylesheet" href="css/style.css" type="text/css">