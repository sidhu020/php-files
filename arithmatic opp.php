<!DOCTYPE html>
<head>

</head>
<body>
<?php
$num1 = 5;
$num2 = 10;
function sum()# + Addition of number
                # + Addition $a + $b Sum of operands
    {
    $SUM = $GLOBALS['num1'] + $GLOBALS['num2'];
    echo "Sum of Two number is ".$SUM;
    }

    function MUL()# * Multiplication of number
                    # * Multiplication $a * $b Product of operands
    {
    $mul = $GLOBALS['num1'] * $GLOBALS['num2'];
    echo "Mul of Two number is ".$mul;
    }

    function DIV()#  /   Division of number
                    # / Division $a / $b Quotient of operands

    {
    $div = $GLOBALS['num1'] / $GLOBALS['num2'];
    echo "Div of Two number is ".$div;
    }

    function SUB()# - Subtraction of number
                    # - Subtraction $a - $b Difference of operands
    {
    $sub = $GLOBALS['num1'] - $GLOBALS['num2'];
    echo "Sub of Two number is ".$sub;
    }

    function MOD()# % Modulus of number
                # % Modulus $a % $b Remainder of operands
    {
    $mod = $GLOBALS['num1'] % $GLOBALS['num2'];
    echo "Mod of Two number is ".$mod;
    }

    function EX()
    {
    $exp = $GLOBALS['num1'] ** $GLOBALS['num2'];
    echo "Exponentiation of two value is " . $exp;
    }


    sum();
    echo "<br>";
    DIV();
    echo "<br>";
    MUL();
    echo "<br>";
    SUB();
    echo "<br>";
    MOD();
    echo "<br>";
    EX();


?>
</body>
</html>