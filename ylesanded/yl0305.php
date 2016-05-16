https://github.com/h3llyeah/phpkursus2016/tree/master/ylesanded </br></br>
<?php
function string_info($i)
{
	echo "Sõne algab : ".$i[0]."<br>";
	echo "Sõne lõppeb : ".$i[(strlen($i)-1)]."<br>";
	echo "Sõne lowercase : ".strtolower($i)."<br>";
	$j=strtolower($i);
	echo "Sõne uppercase : ".strtoupper($i)."<br>";
	
	for ($k=0; $k<=strlen($i); $k++)
	{
        if ($i[$k]=="a")
        {
            $b++;
        }
	}
    echo $b;
}
$string="ABaacdeaA";
string_info($string);
?>
