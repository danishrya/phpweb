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