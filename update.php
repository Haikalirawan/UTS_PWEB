<?php

require_once('./sistem.php');

$id = $_GET['id'];
$fklt = tampilData("SELECT * FROM tbl_fakultas WHERE id = $id")[0];


if (isset($_POST['ubah'])) {
    if (updateData($_POST) > 0) {
        echo
        "
		<script>
			alert('Fakultas baru berhasil diupdatekan');
			document.location.href = './index.php';
		</script>
		
		";
    } else {
        echo
        "
		<script>
			alert('Data Fakultas gagal diupdatekan');
			document.location.href = './index.php';
		</script>
		
		";
    }
}


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
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h1>Tambah Data Fakultas UNEJ</h1>
                <p class="text-muted pb-3">202410103017 - FASAL ALIF HAIKAL IRAWAN</p>
            </div>
            <div class="col-lg-11">
                <form action="" method="POST">

                    <input type="hidden" name="id" value="<?= $id ?>">

                    <div class="mb-3">
                        <label for="fakultas" class="form-label">Nama Fakultas : </label>
                        <input type="text" value="<?= $fklt['fakultas'] ?>" autocomplete="off" autofocus name="fakultas" class="form-control" id="fakultas" required placeholder="Masukkan nama fakultas">

                    </div>
                    <div class="mb-3">
                        <label for="animo" class="form-label">Jumlah Animo : </label>
                        <input type="text" value="<?= $fklt['jml_animo'] ?>" autocomplete="off" name="animo" class="form-control" id="animo" required placeholder="Masukkan jumlah animo">
                    </div>

                    <button type="submit" name="ubah" class="btn btn-primary">Update Data</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>