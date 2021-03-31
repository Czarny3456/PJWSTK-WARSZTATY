<? php
function funcPetle3($bok)
{
    for ($i = 0 ; $i < $bok; $i++)
    {
        for($j = 0; $j < $bok; $j++)
        {
            echo $i + " * " +$j + " = " + $i*j + "\t";
        }
    }
}
?>
