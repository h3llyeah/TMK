https://github.com/h3llyeah/phpkursus2016/tree/master/ylesanded </br></br>
<?php
function print_array($array)
{
	for ($i=0;$i<sizeof($array);$i++)
	{
		  echo ($i+1).". $array[$i]<p>";
	}
}

$mas=['Karu','Jänes','Hunt','Rebane','Hirv','Hiir','Põder','Ahv','Mäger','Mutt'];
print_array($mas);
?>
