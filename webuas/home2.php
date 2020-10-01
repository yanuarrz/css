<?php
//connecting mysql
$conn = mysqli_connect("localhost", "root", "", "websederhana");

//get data 
$result = mysqli_query($conn, "SELECT * FROM register");

//check error
// if (!$result) {
//     echo mysqli_error($conn);
// }

// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpading="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Edit</th>
            <th>Id</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Nama</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) :  ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td><?= $row["id"]; ?></td>
                <td><?= $row["username"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["name"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile ?>

    </table>

</body>

</html>