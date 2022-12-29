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
        $name = "sidd";
        echo "<br>";

        echo "The Leangth of"."my string is".strlen($name);
        echo "<br>";
        echo strrev($name);
        echo "<br>";
        echo strpos($name, "i");
        echo "<br>";
        echo str_replace("sidd", "karn", $name);
        echo "<br>";
        echo str_repeat($name,10);
        echo "<br>";


    ?>



</body>
</html>