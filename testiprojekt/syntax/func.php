<?php 

function get_name($name)
{
    $names= "koer   123
kass    323
kukk    3332
kana    203428";
    
    $rows= explode("\n", $names);
    foreach ($rows as $key => $val)
    {
        $surnames = explode("   ",$val);
    }
    print_r($surenames); //massiivi väljastamine
    return $count;
}

get_name("koer");

?>