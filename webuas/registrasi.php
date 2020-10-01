<?php

require 'functions.php';

if (isset($_POST["registrasi"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('user telah ditambahkan');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
    <h1>Sign Up</h1>

    <form action="" method="post">

        <ul>
            <li>
                <label for="nama">Name</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Confirm Password</label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="registrasi">Register</button>
            </li>
        </ul>

    </form>


</body>

</html>