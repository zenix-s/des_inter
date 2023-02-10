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
        $x = 2;
        if ($x == 1) {
            include "inc1.php";
        } else {
            include "inc2.php";
        }
    ?>
</body>
</html>