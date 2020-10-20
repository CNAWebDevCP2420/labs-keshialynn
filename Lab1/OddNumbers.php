<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/chtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xchtml">
    <head>
    <title>Odd Numbers</title>
    </head>
<body>

<?php

    echo "The odd numbrs between 1 and 100 are: <br>";

    $x = 1; # declare initial variable

    while($x <= 100) # while variable is less than or equal to 100...
    {
        echo " $x"; # display odd number
        $x = $x + 2; # keep adding 2 to display increasing odd numbers
    }

?>


</body>
</html>