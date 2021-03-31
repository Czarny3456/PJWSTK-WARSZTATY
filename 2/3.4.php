<?php
function funcPetla4($liczba)
{
    $czyJestPierwsza = true;
    for($i = 2; $i < $liczba/2; $i++)
    {
        if($liczba % $i == 0)
        {
            $czyJestPierwsza = false;
        }
    }

    if($czyJestPierwsza == true)
    {
        echo "Jest pierwsza";
    }
    else
    {
        echo "nie jest pierwsza";
    }
}
?>