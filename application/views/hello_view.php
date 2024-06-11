<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NPC Intro</title>
</head>

<body>
    <h1 align="center">Selamat datang di white <?php echo $nama ?> room </h1>
    <h3>Nama : <?php echo $nama ?></h3>
    <h3>NPM : <?php echo $npm ?></h3>
    <h3>Kelas : <?php echo $kelas ?></h3>

    <?php
    if (isset($mvc)) {
        echo $mvc;
    }
    ?>
</body>

</html>