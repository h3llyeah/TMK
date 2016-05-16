https://github.com/h3llyeah/phpkursus2016/tree/master/ylesanded </br></br>
<?php

function number_info($i)
{
	echo "Number ".$i." on ", ($i%2==0? "paarisarv." : "paaritu arv.");
	echo "<br>";
	
	echo "Number ".$i." on ",($i>10? "suurem" : "väiksem")." kui 10.";
	echo "<br>";

	echo "Number ".$i." on ",($i>100? "suurem" : "väiksem")." kui 100.";
	echo "<br>";
	
	echo "Numbri ".$i. " ruut võrdub ". pow($i,2).".";
	echo "<br>";

	echo "Numbri ".$i. " ruut võrdub ". sqrt($i).".";
	echo "<br>";

}

$mas=array(1, 8, 9, 15, 200);

foreach ($mas as $func)
	{
	number_info($func);
	echo "<br>";
	}

?>