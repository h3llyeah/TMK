<?php

$line1 = "lause";
$line2 = "lause
";#Antud näide kirjeldab, kui stringi lõpus on enter

if ($line1=="lause")
{
    echo "1"."</br>";
}


if ($line2=="lause\n")
{
    echo "2";
}

#lühike viis kirjutada if lause.
$est = true;
$cur = ($est) ? "EUR" : "USD";
echo $cur."</br>";



$a = 12;
$b = 12;

if ($a > $b)
{
    echo "A $a on suurem kui B $b<br>";
}
elseif ($b > $a)
{
    echo "B $b on suurem kui A $a<br>";
}
else
{
    echo "A $a on võrdne B $b-ga<br>";
} 
?>

