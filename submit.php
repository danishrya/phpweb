<?php
$nama = htmlspecialchars($_POST["nama"]);
$email = htmlspecialchars($_POST["email"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>data berhasil ditambahkan</h1>
    <p>nama: <?= $nama ?></p>
    <p>email: <?= $email ?></p>
</body>
</html>