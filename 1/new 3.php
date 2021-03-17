<?php
function cenzura($zdanie){
	$tablica[0] = 'Romek';
	$tablica[1] = 'przedmiesciach';
	$tablica[2] = 'na';
 echo str_replace($tablica, "*", $zdanie);
}
echo cenzura('Jestem wesoły Romek mam na przemiesciach domek');
?> 