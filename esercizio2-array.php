<?php
$teams=[
    'Roma'=>['marco', 'daniele','davide','luca'],
    'Milan'=>['giovanni','luca','giuseppe','davide','daniele'],
    'inter'=>['marco', 'daniele','davide','luca'],
    'torino'=>['giovanni','luca','giuseppe','davide','daniele'],

]

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php foreach ($teams as $squad => $squad_list) { ?>
    <li>
    <?= $squad ?>
    <ul>
    <?php  foreach ($squad_list as $player_name) { ?>
    <li><?= $player_name ?></li>
    
    </ul>
    </li>
       
    }


    ?>

    </ul>
</body>
</html>