<?php
echo "Enter the num1\tnum2\tnum3\t";
$num1=trim(fgets(STDIN));
$num2=trim(fgets(STDIN));
$num3=trim(fgets(STDIN));
if(($num1>$num2)&&($num1>$num3))
    echo "\tNumber is greatest ".$num1;
if(($num2>$num1)&&($num2>$num3))
    echo "\tNumber is greatest ".$num2;
if(($num3>$num1)&&($num3>$num2))
    echo "\tNumber is greatest ".$num3;
if(($num1<$num2)&&($num1<$num3))
    echo "\tNumber is smallest ".$num1;
if(($num2<$num1)&&($num2<$num3))
    echo "\tNumber is smallest ".$num2;
if(($num3<$num1)&&($num3<$num2))
    echo "\tNumber is smallest ".$num3;
?>