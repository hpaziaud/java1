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
$data = array('random_number' => rand(1, 100));
header('Content-Type: application/json');
echo json_encode($data);
?>


<button id="get-random-number">Obtenir un nombre aléatoire</button>
<div id="random-number-container"></div>
</body>
</html>