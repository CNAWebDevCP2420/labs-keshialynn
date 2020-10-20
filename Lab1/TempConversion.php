<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/chtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xchtml">
    <head>
    <title></title>
    </head>
<body>

<?php

    for($F = 0; $F <= 100; ++$F) {
        $C = round(($F - 32) * (5 / 9), 1);
        echo "$F °F = $C °C<br>";
    }

?>


</body>
</html>