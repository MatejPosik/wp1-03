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
    $r = rand (0,100);
    define('PI',3.14);
        //obsah
        $area = PI * ($r*$r);
        // obvod
        $circuit = 2 * PI * $r;
    ?>
    <p>Poloměr kruhu je <?= $r ?> cm </p>
    <p>Obsah kruhu je <?= $area ?> cm2 </p>
    <p>Obvod kruhu je <?= $circuit ?> cm </p>

</body>
</html>