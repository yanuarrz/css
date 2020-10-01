<?php
require 'functions.php';
$pendaf = query("SELECT * FROM register");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Halaman Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="util.css">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <h1 class="tulisan_utama">Daftar Mahasiswa</h1>
    <a href="tambahdata.php" class="tulisan_utama">Tambah Pendaftar</a>
    <br><br>

    <!-- <table border="1" cellpading="10" cellspacing="0"> -->
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
                            <thead>
                                <tr class="row100 head">
                                    <th class="cell100 column1">No.</th>
                                    <th class="cell100 column2">Edit</th>
                                    <th class="cell100 column3">Id</th>
                                    <th class="cell100 column4">User Name</th>
                                    <th class="cell100 column5">Email</th>
                                    <th class="cell100 column6">Nama</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <!-- <tr class="row100 head"> -->
                    <!-- <th>No.</th>
            <th>Edit</th>
            <th>Id</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Nama</th> -->
                    <!-- </tr> -->
                    <div class="table100-body js-pscroll">
                        <table>
                            <tbody>
                                <tr class="row100 body">
                                    <?php $i = 1; ?>
                                    <?php foreach ($pendaf as $row) : ?>
                                <tr class="row100 body">
                                    <td class="cell100 column1"><?= $i; ?></td>
                                    <td class="cell100 column2">
                                        <a href="">Ubah</a> |
                                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('ingin menghapus data?');">Hapus</a>
                                    </td>
                                    <td class="cell100 column3"><?= $row["id"]; ?></td>
                                    <td class="cell100 column4"><?= $row["username"]; ?></td>
                                    <td class="cell100 column5"><?= $row["email"]; ?></td>
                                    <td class="cell100 column6"><?= $row["name"]; ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>

</body>

</html>