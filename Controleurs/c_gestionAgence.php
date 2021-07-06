<?php

if(!isset($_REQUEST['action']))
    $action = 'consulterLesAgences';
else
    $action = $_REQUEST['action'];

$message = " l'action est: " . $action;
switch($action)
{
	case 'consulterLesAgences':
	{  
		$lesAgences = $laConnexionNetcar->getLesAgences();	
	
        include("vues/v_consulterLesAgences.php");
		
		$message = "Netcar comporte ". count($lesAgences). " agences pour être au plus proche de vous.";
		$stylePresentation = "text-success";
		break;
    }        
        
}


