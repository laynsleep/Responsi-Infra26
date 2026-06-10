<?php

$konek = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_NAME']);
$result = mysqli_fetch_array(mysqli_query($konek, "SELECT * FROM students"));

$nama = "Chaedar Ali Amrulloh";
$nim  = "H1H024044";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Web 3</title>
</head>
<body>

<h1>WEB SERVER 3</h1>

<hr>

<p>
Nama Praktikan:
<strong><?= $result[1] ?? "gagal akses db" ?></strong>
</p>

<p>
NIM:
<strong><?= $result[0] ?? "gagal akses db" ?></strong>
</p>

<p>
Container:
<strong>WEB-WOB</strong>
</p>

</body>
</html>