<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$randomNumber = rand(1, 100);


$data = array('randomNumber' => $randomNumber);

$jsonData = json_encode($data);


header('Content-Type: application/json');


echo $jsonData;
?>

<button onclick="getRandomNumber()">Obtenir un nombre aléatoire</button>

<div id="randomNumber"></div>
<script src="test.js"></script>
</body>
</html>