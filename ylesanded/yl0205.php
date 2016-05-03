https://github.com/h3llyeah/phpkursus2016/tree/master/ylesanded<br>
<br>
<?php
$movies=array(
	array("Chauranga","Wazir","Chalk n Duster"),
	array("Rebellious Flower","Airlift","Jugni"),
	array("Mastizaade","BHK Bhalla@Halla.Kom","Ghayal Once Again")
	);

for ($i=0 ; $i<3; $i++)
{
	for ($j=0; $j<3;$j++)
	{
		echo $movies[$i][$j]."<br>";
	}
}

?>