<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/chtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xchtml">
    <head>
    <title>Rounded Values</title>
    </head>
<body>


<?php

    define("number", 3.14159265);
    echo "";

    $Valuechange = floor(number);
    echo "The floor value to the nearest whole number is $Valuechange. <br>";

    $Valuechange = ceil(number);
    echo "The ceil function that rounds to the nearest whole number is $Valuechange. <br>";

    $Valuechange = round(number);
    echo "The rounded value is $Valuechange. <br>";

    $Valuechange = round(number, 4);
    echo "The rounded value to 4 five decimal places is $Valuechange. <br>";

?>


</body>
</html>