<?php
#als je gaat schrijven in een bestand, overschrijf je wat er al in stond

#wel schrijfrechten geven, zoek CHMOD 775 Windows op

// Allereerste input

/*
$myFile2 = "testFolder/sampleFile2.txt";
$myFileLink2= fopen($myFile2, 'w+') or die("Can't open file."); #w+ voor write
$newContents = "Mijn eerste lijn in een txt ";
fwrite($myFileLink2, $newContents);
fclose($myFileLink2);
*/


$myFile2 = "testFolder/sampleFile2.txt";
$myFileLink2= fopen($myFile2, 'a+') or die("Can't open file."); #a voor append dus dan voeg je toe in de plaats van te overschrijven
$newContents = "\n Mijn tweede lijn in een txt"; #n voor nieuwe lijn
fwrite($myFileLink2, $newContents);
fclose($myFileLink2);




$myFile2 = "testFolder/sampleFile2.txt";
$myFileLink2= fopen($myFile2, 'a+') or die("Can't open file."); #a voor append dus dan voeg je toe in de plaats van te overschrijven
$newContents = PHP_EOL . "Mijn tweede lijn in een txt"; # hiet PHP_EOL end of line
fwrite($myFileLink2, $newContents);
fclose($myFileLink2);
