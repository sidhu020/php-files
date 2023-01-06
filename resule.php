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
        $mark=49;

        if($mark>=90)
        {
        echo "You Get A+";
        }
        elseif($mark>=75 && $mark<=90)
        {
        echo "You Get A";
        }
        elseif($mark>=70 && $mark<=75)
        {
        echo "You Get B";
        }
        elseif($mark>=60 && $mark<=70)
        {
        echo "You Get C";
        }
        elseif($mark>=50 && $mark<=60)
        {
        echo "You Get D";
        }
        else
        {
        echo "You Are Failed";
        }

    echo "<br>";
    echo "Your Mark is" . $mark;

        ?>



</body>
</html>