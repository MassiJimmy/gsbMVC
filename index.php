<?php
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
include("vues/v_entete.php") ;
session_start();
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");
		break;
	}
	//Pour le visiteur
	case 'gererFrais' :{
		include("controleurs/c_gererFrais.php");
		break;
	}
	case 'etatFrais' :{
		include("controleurs/c_etatFrais.php");
		break; 
	}
	//Pour le comptable
	case 'gererVisiteur':
    {
        include("controleurs/c_gererVisiteur.php");
		break;
    }
	case 'etatFrais2':		
		{
			include("controleurs/c_etatFrais2.php");
			break;
		}
}
include("vues/v_pied.php") ;
?>

