https://github.com/h3llyeah/phpkursus2016/tree/master/ylesanded </br></br>
<?php
function print_array($array)
{
	for ($i=0;$i<sizeof($array);$i++)
	{
		  echo ($i+1).". $array[$i] ";
	}
}

function vaheta_elemendid($i,$j, $array)
{
	$a=$array[$i];
	$array[$i]=$array[$j];
	$array[$j]=$a;
	return $array;
}

$mas=['Karu','J�nes','Hunt','Rebane','Hirv','Hiir','P�der','Ahv','M�ger','Mutt'];
print_array($mas);
print_array(vaheta_elemendid(0,1,$mas))

?>