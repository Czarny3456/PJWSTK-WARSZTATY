<?php
function funcPetle1()
{
        $tablicaLiczb = array(100,49,56,84,72,34,59,47);
        $max = -2000000000;
        for ($i = 0; i < $tablicaLiczb.count(); $i++)
        {
            if($tablicaLiczb[$i] > $max)
            {
                $max = $tablicaLiczb[$i];
            }
        }
         echo "maksymalna liczba to " + $max;

        $index = 0;
        $max = -2000000000;
        while ($index < $tablicaLiczb.count())
        {
            if($tablicaLiczb[$index] > $max)
            {
                $max = $tablicaLiczb[$index];
            }
            $index++;
        }

        echo "maksymalna liczba to " + $max;

    $index = 0;
    $max = -2000000000;
        do{
            if($tablicaLiczb[$index] < $max)
            {
                $max = $tablicaLiczb[$index];
                $index++;
            }
        }while ($index < $tablicaLiczb.count() );
    echo "maksymalna liczba to " + $max;

    $max = -2000000000;
    foreach ($tablicaLiczb as $liczba)
    {
        if($tablicaLiczb[$index] < $max)
        {
            $max = $tablicaLiczb[$index];

        }
    }
}
?>