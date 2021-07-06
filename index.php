<?php
//permet de conserver durablement des informations d'une page à l'autre, tant que la session n'est pas terminée
session_start();

//import de la classe permettant de faire la connexion à la base de données avec PDO
require_once("modeles/class.ConnexionBdPdo.inc.php");

//import des instructions permettant de construire le bandeau d'en-tête
include("vues/v_layout_entete.php") ;



//creation de l'objet PDO d'accès à la BD via le modèle
$laConnexionNetcar = ConnexionBdPdo::getLInstanceSingleton();	


//aiguillage vers les sous-contrôleurs

if(!isset($_REQUEST['controleur']))
    $controleur = 'accueil';
else
    $controleur = $_REQUEST['controleur'];
 
switch($controleur)
{
	case 'accueil':
		{ include("vues/v_accueil.html");
		  break;
		}
		
	case 'gestionAgence' :
		{ include("controleurs/c_gestionAgence.php");
		  break;
		}        
}

//import des instructions permettant de construire le pied de page
include("vues/v_layout_pied.php") ;
?>