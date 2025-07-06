<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="head">
        <h1>PENGUMUMAN HARI INI</h1>
        <a href="input_surat.php">Input</a>
        <img src="/img/logo.png">
    </div>
    
    <div class="pengumuman-list">
        <table>
            <tr>
                <td>Pengumuman 1</td>
            </tr>
            <tr>
                <td>Pengumuman 2</td>
            </tr>
        </table>
    </div>
</body>
</html>
