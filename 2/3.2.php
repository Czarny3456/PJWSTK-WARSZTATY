<?php
function funcPetle2($ileRazy)
{
    if($ileRazy < 0)
    {
        echo "Zly argument";
        return ;
    }
    $tablica = array();
    for ($i = 0; $i < $ileRazy; $i++)
    {
        array_push($tablica,rand(1,6));
    }

    return $tablica;
?>