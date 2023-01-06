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

    $age = 17;

    if($age >18)
    {
        echo "Your Aligible";
    }
    else
    {
        echo "Your are not Aligible";

        if($age == 17)
        {
            echo "<br>";
            echo "Your age is 17 You Can Wait For 1 year";
        }

        else
        {
            echo "<br>";
            echo"You Age is".$age;
        }
    }








    ?>
</body>
</html>