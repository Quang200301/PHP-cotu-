<?php
$a = 10;
$b = 20;
function Sum()
{
global $a, $b;
 $a = $a + $b;
}
Sum();
echo $a;
?> 