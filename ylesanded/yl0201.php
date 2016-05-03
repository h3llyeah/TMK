https://github.com/h3llyeah/phpkursus2016/tree/master/ylesanded<br>
<br>

<?php

$drinks[]=0;

for ($i=0 ; $i<99 ; $i++)
{
    $a=rand(1,100);
    array_push($drinks,$a);
}

print_r($drinks);
?>
