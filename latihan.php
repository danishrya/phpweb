<?php
$numbers = [1,2,3,4,5,6,7,8,9];//array indexing

$numbers2 = [
    [1,2,3], 
    [4,5,6],
    [7,8,9]
];

$student = [
    ["nama" => "citra","NISN" => "12345"],
    ["nama" => "yoyok","NISN" => "54321"],
    ["nama" => "brian","NISN" => "53214"],
]
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .square{
            padding: 10px;
            background-color: red;
            float: left;
            margin-right: 5px;
            color: white;
        }
        .clear{
            clear: both;
        }
        .kotak{
            padding: 10px;
            background-color: orange;
            float: left;
            color: white;
            text-align: center;
            line-height: 5px;
            margin-right: 5px;
            transition: 0.5s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        table{
            border-collapse: collapse;
        }
        th,td{
            padding: 15px; 
            text-align: left;
        }
        th{
            background-color: aqua;
            color: blanchedalmond;
        }

    </style>
</head>
<body>
    <?php foreach ($numbers as $angka) : ?>
        <div class="square"><?= $angka ?></div>
    <?php endforeach ?>

    <div class="clear"></div>
    
    <br>

    <?php foreach ($numbers2 as $angka): ?>
        <?php foreach ($angka as $item): ?>
            <div class="kotak"><?php $item ?></div>
        <?php endforeach ?>
        <div class="clear"></div>
    <?php endforeach ?>
            
    <hr>
    <h1>DAFTAR SISWA</h1>
    <table border="1">
        <thead>
            <tr>
                <th>NAMA</th>
                <th>NISN</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($student as $siswa) : ?>
            <tr>
                <td><?= $siswa["nama"]?></td>
                <td><?= $siswa["NISN"]?></td>
                <td>
                    <a href="latihan2.php?nama=<?=$siswa["nama"]?>&nisn=<?=$siswa["NISN"]?>">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>