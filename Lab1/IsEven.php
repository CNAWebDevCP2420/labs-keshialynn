<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/chtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xchtml">
    <head>
    <title>Is Even</title>
    </head>
<body>


<?php

    $EnterValue = 20.789;

    /* Check for Int */
    $IntValue = (is_numeric($EnterValue) ? $EnterValue : (int)$EnterValue);
    $TestValue = (is_int($IntValue) ? $IntValue : round($IntValue));

    /* Get remainder when divided by 2 */
    $Remainder = $TestValue % 2;

    /* Is the remainder odd or even */
    $Result = ($Remainder==0 ? "even" : "odd");

    /* declare is_numeric function */
    $Display = (is_numeric($EnterValue) ? "$EnterValue" : "'$EnterValue'");

    /* Display result */
    $Description = ($EnterValue===$TestValue ? "$TestValue" : "$TestValue (the rounded value is $Display)");


    /* echo display result */
    echo "$Description is $Result";


?>


</body>
</html>