https://github.com/h3llyeah/phpkursus2016/tree/master/ylesanded </br></br>
<?php

function number_info($i)
{
	echo "Number ".$i." on ", ($i%2==0? "paarisarv." : "paaritu arv.");
	echo "<br>";
	
	echo "Number ".$i." on ",($i>10? "suurem" : "v�iksem")." kui 10.";
	echo "<br>";

	echo "Number ".$i." on ",($i>100? "suurem" : "v�iksem")." kui 100.";
	echo "<br>";
	
	echo "Numbri ".$i. " ruut v�rdub ". pow($i,2).".";
	echo "<br>";

	echo "Numbri ".$i. " ruut v�rdub ". sqrt($i).".";
	echo "<br>";

}

$mas=array(1, 8, 9, 15, 200);

foreach ($mas as $func)
	{
	number_info($func);
	echo "<br>";
	}

?>