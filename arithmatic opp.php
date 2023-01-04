<!DOCTYPE html>
<head>

</head>
<body>
<?php
$num1 = 5;
$num2 = 10;
function sum()# + sum of number
    {
    $SUM = $GLOBALS['num1'] + $GLOBALS['num2'];
    echo "Sum of Two number is ".$SUM;
    }

    function MUL()# * mul of number
    {
    $mul = $GLOBALS['num1'] * $GLOBALS['num2'];
    echo "Mul of Two number is ".$mul;
    }

    function DIV()#  n   sum of number
    {
    $div = $GLOBALS['num1'] / $GLOBALS['num2'];
    echo "Div of Two number is ".$div;
    }

    function SUB()# + sum of number
    {
    $sub = $GLOBALS['num1'] - $GLOBALS['num2'];
    echo "Sub of Two number is ".$sub;
    }




    sum();
    echo "<br>";
    DIV();
    echo "<br>";
    MUL();
    echo "<br>";
    SUB();


?>
</body>
</html>