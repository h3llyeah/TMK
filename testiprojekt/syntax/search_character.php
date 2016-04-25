<?php
$j =$_GET['j'];
$rand=rand(1,200);

for ($i = 0; $i<$j; $i++)
{
    echo "o";
    if($i==$rand) echo "c ";
}

?>