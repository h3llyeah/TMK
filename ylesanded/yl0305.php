https://github.com/h3llyeah/phpkursus2016/tree/master/ylesanded </br></br>
<?php

function string_info($i)
{
	echo "S�ne algab :".$i[0]."<br>";
	echo "S�ne l�ppeb :".$i[(strlen($i)-1)]."<br>";
	echo "S�ne lowercase :".strtolower($i)."<br>";
	$j=strtolower($i);
	echo "S�ne uppercase :".strtoupper($i)."<br>";
	
	for ($k=0; $k<=strlen($i); $k++)
	{
		echo $k."<br>";
	}
}

$string="ABcdeaA";

string_info($string);

?>