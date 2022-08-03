<?php

require_once('./sistem.php');

$fakultas = tampilData("SELECT * FROM tbl_fakultas");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/652faa76c7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>UTS - PWEB</title>
    <!-- ASC & DESC -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <h1>Tabel FAKULTAS UNEJ</h1>
                    <p class="text-muted pb-3">202410103017 - FASAL ALIF HAIKAL IRAWAN</p>
                </div>
                <div class="p-4">
                    <a href="tambah.php" target="_blank" class="btn btn-primary">Tambah</a>
                </div>
                <table class="table table-hover" id="example">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col">Jumlah Animo</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $no = 1; ?>
                            <?php foreach ($fakultas as $fklt) : ?>
                                <th><?= $no; ?></th>
                                <td><?= $fklt['fakultas']; ?></td>
                                <td><?= $fklt['jml_animo']; ?></td>
                                <td>
                                    <a href="update.php?id=<?= $fklt['id']; ?>" class="btn btn-success">
                                        Edit
                                    </a>
                                    <a href="hapus.php?id=<?= $fklt['id']; ?>" class="btn btn-danger" onclick="return confirm('Data akan terhapus dari sistem, Anda yakin??')">
                                        Delete
                                    </a>
                                </td>
                        </tr>
                        <?php $no++ ?>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- ASC & DESC -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>

</html>