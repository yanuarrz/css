<?php

//connecting mysql
$conn = mysqli_connect("localhost", "root", "", "websederhana");

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

function tambah($data)
{
    global $conn;

    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["pass"]);
    $nama = htmlspecialchars($data["name"]);


    //query insert data
    $query = "INSERT INTO register VALUES
                ('', '$username', '$email', '$password', '$nama')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM register WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function registrasi($data)
{
    global $conn;

    $nama = $data["nama"];
    $email = htmlspecialchars($data["email"]);
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username
    $result = mysqli_query($conn, "SELECT username FROM signupuser
    WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah ada');
        </script>";
        return false;
    }

    //confirm pass
    if ($password !== $password2) {
        echo "<script>
            alert('password tidak sesuai');
        </script>";
        return false;
    }

    //enkripsi pass
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO signupuser VALUES ('', '$nama', '$email', '$username', '$password')");

    return mysqli_affected_rows($conn);
}
