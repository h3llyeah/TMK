<?php 

$drinks[]="Pesuvesi"; //kommentaar
$drinks[]="Kohv";
$drinks[]="Tee";
$drinks[]="Mullivesi";
$drinks[]="Piim";

$a=rand(0,sizeof($drinks)-1);
$b=rand(0,sizeof($drinks)-1);


echo "Isa joob jooki $drinks[$a]"."<br>";
echo "Poja lemmikjook on $drinks[$b]";

echo "<hr>";

echo "<ol>";
for ($i=0 ; $i < sizeof($drinks) ; $i++)
{
    echo strtolower("<li> $drinks[$i]");
    echo "- " . rand(1,10) . "€";
    echo "</li>";
}
echo "</ol>";
echo "<hr>";



echo "<p>";
foreach ($drinks as $key => $val)
{
    $counter++;
    echo "$counter) Massiivi element indeksiga $key väärtus on $val.<br>";
}
echo "<hr>";

?>