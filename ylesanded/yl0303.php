https://github.com/h3llyeah/phpkursus2016/tree/master/ylesanded </br></br>
<?php
function kuva_massiiv($array)
{
	for ($i=0;$i<sizeof($array);$i++)
	{
		  echo ($i+1).". $array[$i] <br>";
	}
	echo "<br>";
}

function vaheta_elemendid($i,$j, $array)
{
	$a=$array[$i];
	$array[$i]=$array[$j];
	$array[$j]=$a;
	return $array;
}

function kustuta_element($i,$array)
{
	echo "Kustutatakse algsest massiivist ".$i." element: <br>";
	array_splice($array,$i-1,1);
	return $array;
	
}

$mas=['Karu','Jänes','Hunt','Rebane','Hirv','Hiir','Põder','Ahv','Mäger','Mutt'];
kuva_massiiv($mas);

kuva_massiiv(vaheta_elemendid(0,1,$mas));

kuva_massiiv(kustuta_element(5,$mas));
?>