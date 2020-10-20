<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/chtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xchtml">
    <head>
    <title>Interest Array</title>
    </head>
<body>

<?php
    //$InterestRate1 = .0725;
    //$InterestRate2 = .0750;
    //$InterestRate3 = .0775;
    //$InterestRate4 = .0800;
    //$InterestRate5 = .0825;
    //$InterestRate6 = .0850;
    //$InterestRate7 = .0875;

    $RatesArray=array(".0725", ".0750", ".0775", ".0800", ".0825", ".0850", ".0875");
    $arrlength=count($RatesArray);

    for($x=0;$x<$arrlength;$x++) {
        echo $RatesArray[$x];
        echo "<br>";
    }
?>


</body>
</html>