<?php
$numbers = [1,2,3,4,5,6,7,8,9];//array indexing

$numbers2 = [
    [1,2,3], 
    [4,5,6],
    [7,8,9]
];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            transition: 1s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
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
    <?php endforeach ?>
            
</body>
</html>