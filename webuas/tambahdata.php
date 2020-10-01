?<?php
    require 'functions.php';

    //button
    if (isset($_POST["submit"])) {

        if (tambah($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil dimasukan!');
                    document.location.href= 'home.php';
                </script>
            ";
        } else {
            echo "
            <script>
                alert('gagal ditambahkan!');
                document.location.href= 'home.php';
            </script>
        ";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Pendaftar</title>
</head>

<body>
    <h1>Tambah Data Pendaftar</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username </label>
                <input type="text" name="username" id="username" required>
            </li>
            <li>
                <label for="email">Email </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="pass">Password </label>
                <input type="password" name="pass" id="pass" required>
            </li>
            <li>
                <label for="name">Name </label>
                <input type="text" name="name" id="name" required>
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>
</body>

</html>