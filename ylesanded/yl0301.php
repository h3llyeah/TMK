https://github.com/h3llyeah/phpkursus2016/tree/master/ylesanded </br>
<?php
function print_array($array)
{
	for ($i=0;$i<sizeof($array);$i++)
	{
		  echo $array[$i].'<p>';

	}
}

$mas=['Karu','J�nes','Hunt','Rebane','Hirv','Hiir','P�der','Ahv','M�ger','Mutt'];
print_array($mas);
?>