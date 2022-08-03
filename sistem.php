<?php

$conn = mysqli_connect("localhost", "202410103017", "secret", "uas202410103017");


// Query database
function tampilData($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


// Tambah Data
function tambahData($post)
{
    global $conn;
    $fakultas = $post['fakultas'];
    $animo = $post['animo'];

    $tambah = "INSERT INTO tbl_fakultas VALUES('', '$fakultas','$animo')";

    mysqli_query($conn, $tambah);

    return mysqli_affected_rows($conn);
}


// Hapus Data
function hapusData($id)
{
    global $conn;

    $hapus = "DELETE FROM tbl_fakultas WHERE id=$id";

    mysqli_query($conn, $hapus);

    return mysqli_affected_rows($conn);
}


// Update Data
function updateData($post)
{
    global $conn;
    $id = $post['id'];
    $fakultas = $post['fakultas'];
    $animo = $post['animo'];

    $update = "UPDATE tbl_fakultas SET
                id = $id,
                fakultas = '$fakultas',
                jml_animo = '$animo'
                WHERE
                id = $id
                ";

    mysqli_query($conn, $update);

    return mysqli_affected_rows($conn);
}
