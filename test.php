<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div name="madiv1">coucou</div>
    <div name="madiv1">coucou</div>
    <div name="madiv1">coucou</div>
    <button id="myBtn">Try it</button>

    <script src="test.js"></script>
    
    <?php
    $retour[0] = rand(0,100);

    echo json_encode($retour);

    ?>
    
</body>
</html>