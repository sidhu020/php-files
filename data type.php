 <?php
    $name = "siddharth";
    $income = 12000;

    /*
    >php data type

    1. String
    2. integer
    3. float
    4. boolean
    5. array
    6. object
    7. null
    */

    // string data type example

    $name = "siddharth";
    $frnd = "katan";
    echo "$name is frnd of $frnd<br>";

    // Integer - non decimal number

    echo "<br>";
    $income = 1000;
    echo "<br>";
    $mark = 95;

    echo "<br>";
    echo $income;
    echo "<br>";
    echo $mark;

    // Float - Decimal Number
    echo "<br>";
    $income = 1000.5;
    echo "<br>";
    $mark = 95.5;

    echo $income;
    echo $mark;

    // Boolean - can be either True or fulse
    echo "<br>";
    $frnd = true;
    echo "<br>";
    $mark = 95;

    echo $frnd;


    $name="siddharth";
    $mark=95;
    $true=true;
    $false=false;
    $pr=98.58;
   // $null= ;

    echo var_dump ($name);
    echo "<br>";
    echo var_dump($mark);
    echo "<br>";
    echo var_dump($true);
    echo "<br>";
    echo var_dump($false);
    echo "<br>";
    echo var_dump($pr);
    echo "<br>";

// array

    $friends = array("karan","girish","drov");
    echo var_dump ($friends);
    echo "<br>";
    echo $friends[0];
    echo "<br>";
    echo $friends[1];
    echo "<br>";
    echo $friends[2];
    echo "<br>";


    //null

    $name = NULL;
    echo var_dump ($name);






?>