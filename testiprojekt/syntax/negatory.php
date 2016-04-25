 <?php 
//Palgal on väärtus.

    $palk = 10000; 
     
    if ($palk != "") 
    { 
        echo "Sa saad palka 1!<br>"; 
    } 
     
//Palgal pole väärtust.
    $palk = ""; 
     
    if ($palk != "") 
    { 
        echo "Sa saad palka 2!<br>"; 
    } 
    
//NB! Huvitav moment. Palgal on väärtuseks tühik.
    $palk = " "; 
     
    if ($palk != "") 
    { 
        echo "Sa saad palka 3!<br>"; 
    } 
     
    
    $animal = "human";
    if ($animal !="")
    {
        echo "Zooparker1 $animal";//."<br>";
    }

    $animal = "human";
    if (!$animal) //saad kontrollida, kas animal sisaldab väärtust
    {
        echo "Zooparker2 $animal";
    }

?> 