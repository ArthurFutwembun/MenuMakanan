<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "menu");
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($menu)
{
    global $conn;
    $nama_menu = $menu["nama_menu"];
    $harga = $menu["harga"];
    $kategori = $menu["kategori"];
    if ($menu["rekomendasi"] == 'Y') {
        $query = "INSERT INTO daftar_menu VALUES (NULL, '$nama_menu', '$harga', '$kategori', 'Y')";
        mysqli_query($conn, $query);
    } else {
        $query = "INSERT INTO daftar_menu VALUES (NULL, '$nama_menu', '$harga', '$kategori', NULL)";
        mysqli_query($conn, $query);
    }
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM daftar_menu WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($menu)
{
    global $conn;
    $id = $menu["id"];
    $nama_menu = $menu["nama_menu"];
    $harga = $menu["harga"];
    $kategori = $menu["kategori"];
    if ($menu["rekomendasi"] == 'Y') {
        $query = "UPDATE daftar_menu SET 
        nama_menu = '$nama_menu', 
        harga = '$harga', 
        kategori = '$kategori', 
        rekomendasi = 'Y'
        WHERE id = $id";
        mysqli_query($conn, $query);
    } else {
        $query = "UPDATE daftar_menu SET 
        nama_menu = '$nama_menu', 
        harga = '$harga', 
        kategori = '$kategori', 
        rekomendasi = NULL
        WHERE id = $id";
        mysqli_query($conn, $query);
    }
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM daftar_menu
                    WHERE
                id LIKE '%$keyword%' OR
                nama_menu LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                kategori LIKE '%$keyword%'
                ";
    return query($query);
}
