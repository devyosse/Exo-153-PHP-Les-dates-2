<?php

## PHP - Les dates
## Pour tous les exercices, vous pouvez utiliser le site http://php.net
## N'hesitez pas à faire des pages avec du HTML/CSS

## Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)

$roh = date("d/m/Y");
echo "<br>$roh<br>";



## Exercice 2 Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)
$today = date("d-m-Y");
echo "<br>$today<br>";



## Exercice 3 Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
## Bonus : Le faire en français.
$date = date('d/m/Y');
echo strftime('%A %d %B', strtotime($date));
echo "<br><br>";



## Exercice 4 Afficher le timestamp du jour.
## Afficher le timestamp du mardi 2 août 2016 à 15h00.
$timestamp = mktime(16, 27, 0, 01, 13, 2022);
$timestam = mktime(15, 00, 0, 8, 2, 2016);
echo "<br>$timestamp<br>";
echo "<br>$timestam<br>";


##Exercice 5 Afficher le nombre de jours qui séparent la date du jour avec le 16 mai 2016.
$date1 = "16-05-2016";
$date2 = "14-01-2022";

$date3 = strtotime($date1);
$date4 = strtotime($date2);

$nbJoursTimestamp = $date4 - $date3;

$nbJours = $nbJoursTimestamp/86400;

echo "Nombre de jours : ".$nbJours;


echo "<br><br>";

##Exercice 6 Afficher le nombre de jours dans le mois de février de l'année 2016.
$number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
echo "<br>$number<br>";

##Exercice 7 Afficher la date du jour + 20 jours.

echo date('d-m-Y', strtotime('+20 days'));
echo "<br>";
##Exercice 8 Afficher la date du jour - 22 jours

echo date('d-m-Y', strtotime('-22 days'));
echo "<br>";

## TP Faire un formulaire avec deux listes déroulantes.
## La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
# MEGA BONUS ( surligné et caractère gras :-)  ) : En fonction des choix, afficher un calendrier ( voir libs JS ou autres )


