<?php
    $num3 = 200;
    $num4 = 400;
    $op = '+';

    if ($op == '+') {
        $result = $num3 + $num4;
        echo "The result of $num3 + $num4 is $result";
    }
     elseif ($op == '-') {
        $result = $num3 - $num4;
        echo "<br> The result of $num3 - $num4 is $result";
    }
     elseif ($op == '*') {
        $result = $num3 * $num4;
        echo "<br> The result of $num3 * $num4 is $result";
    }
     elseif ($op == '/') {
        $result = $num3 / $num4;
        echo "<br> The result of $num3 / $num4 is $result";
    }
     else {
        echo "Invalid operator";
    }
?>