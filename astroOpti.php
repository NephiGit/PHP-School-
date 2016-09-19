<?php

include 'php/io.php';

$jour = 0;
$mois = " ";

Saisir("JourNaissance: ", $jour);
Saisir("MoisNaissance: ", $mois);

switch ($mois) {
    case 01:
        if (($jour >= 1) && ($jour <= 20)) {
            echo("Vous etes Capricorne");
            
        }
        else if (($jour >= 21) && ($jour <= 31)){
            echo("Vous etes Verseau");
        }
        else {
            echo("ERROR 404");
        }
        break;
    case 02:
        if(($jour >= 1) && ($jour <= 19)) {
            echo("Vous etes Verseau");
        }
        else if (($jour >= 20) && ($jour <= 29)) {
            echo("Vous Poisson");
        }
        else{
            echo("ERROR 404");
        }
        break;
    case 03:
        if (($jour >= 1) && ($jour <= 20)) {
            echo("Vous etes Poisson");
        }
        else if (($jour >= 21) && ($jour <= 31)) {
            echo("Vous etes Belier");
        }
        else {
            echo("ERROR 404");
        }
        break;
    case 04:
        if (($jour >= 1) && ($jour >= 19)) {
            echo("Vous etes Belier");
        }
        else if (($jour >= 20) && ($jour <= 30)){
            echo("Vous etes Taureau");
        }
     else {
            echo("ERROR 404");
        }
        break;
    case 05:
        if (($jour >= 1) && ($jour <= 20)) {
            echo("Vous etes Taureau");
        }
        else if (($jour >= 21) && ($jour <= 31)) {
            echo("Vous etes Gemeaux");
        }
        else {
            echo("ERROR 404");
        }
        break;
    case 06:
        if (($jour >= 1) && ($jour <= 21)) {
            echo("Vous etes Gemeaux");
        }
        else if (($jour >= 22) && ($jour <= 30)) {
            echo("Vous etes Cancer");
        }
        else {
            echo("ERROR 404");
        }
        break;
    case 07:
        if(($jour >= 1) && ($jour <= 22)) {
            echo("Vous etes Cancer");
        }
        else if (($jour >= 22) && ($jour <= 31)) {
            echo("Vous etes Lion");
        }
        else {
            echo("ERROR 404");
        }
        break;
    case 08:
        if (($jour >= 1) && ($jour <= 22)) {
            echo("Vous etes Lion");
        }
        else if (($jour >= 23) && ($jour <= 31)) {
            echo("Vous etes Vierge");
        }
        else {
            echo("ERROR 404");
        }
        break;
    case 09:
        if(($jour >= 1) && ($jour <= 22)) {
            echo("Vous etes Vierge");
        }
        else if (($jour >= 23) && ($jour <= 30)){
            echo("Vous etes Balance");
        }
        else {
            echo("ERROR 404");
        }
        break;
    case 10:
        if(($jour >= 1) && ($jour <= 23)) {
            echo("Vous etes Balance");
        }
        else if (($jour >= 22) && ($jour <= 31)) {
            echo("Vous etes Scorpion");
        }
        else {
            echo("ERROR 404");
        }
        break;
    case 11:
        if(($jour >= 1) && ($jour <= 22)) {
            echo("Vous etes Scorpion");
        }
        else if (($jour >= 23) && ($jour <= 30)) {
            echo("Vous etes Sagittaire");
        }
        else {
            echo("ERROR 404");
        }
        break;
    case 12:    
        if(($jour >= 1) && ($jour <= 22)) {
            echo("Vous etes Sagittaire");
        }
        else if(($jour >= 22) && ($jour <= 31)){
            echo("Vous etes Capricorne");
        }
        else {
            echo("ERROR 404");
        }
        break;
    default:
        echo("I don't know");
        break;
}
?>
