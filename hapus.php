<?php

require_once('./sistem.php');

$id = $_GET['id'];

if (hapusData($id) > 0) {
    echo
    "
		<script>
			alert('Fakultas berhasil dihapus');
			document.location.href = './index.php';
		</script>
		
		";
} else {
    echo
    "
		<script>
			alert('Data Fakultas gagal dihapus');
			document.location.href = './index.php';
		</script>
		
		";
}
