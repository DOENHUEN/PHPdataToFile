<?php

// Stukje tekst
$myFileOne = "sampleFile.txt";
$fhOne = fopen($myFileOne, 'r'); #fopen is open file en de 'r' zorgt voor read
$myFileContentsOne = fread($fhOne, 21); #dit neemt de eerste 21 karakters (incl spaties en tekens)
fclose($fhOne); #nooit vergeten de file terug te sluiten
echo $myFileContentsOne;

echo '<br/>';

// De hele tekst
$myFile = "sampleFile.txt";
$myFileLink = fopen ($myFile, 'r');
$myFileContents = fread ($myFileLink, filesize($myFile)); #filesize om de volledige lengte van het bestand te weten
fclose($myFileLink);
echo $myFileContents;

echo '<br/>';
