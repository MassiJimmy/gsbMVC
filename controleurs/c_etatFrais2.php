<?php

$id = $_POST['nom'];
$ida = $pdo->getIDUser($id);
$vivi = $pdo->GetLeNomDesVi($id);
include("vues/v_sommaire_comptable.php");
$action = $_REQUEST['action'];
$infovisiteur = $_SESSION['idVisiteur'];
switch($action){
	case 'selectionnerMoisDeux':{
		$lesMois=$pdo->getLesMoisDisponiblesCompta($id);
		

		// Afin de sélectionner par défaut le dernier mois dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		$lesCles = array_keys( $lesMois );
		$moisASelectionner = $lesCles[0];
		var_dump($id);
		
		include("vues/v_listeMoisDeux.php");
		break;
	}
	case 'voirEtatFrais2':{
		
		$leMois = $_REQUEST['lstMois2']; 
		var_dump($ida);
		$moisASelectionner = $leMois;
		
		include("vues/v_listeMoisDeux.php");
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($ida,$leMois);
		$lesFraisForfait= $pdo->getLesFraisForfait($ida,$leMois);
		$numAnnee =substr( $leMois,0,4);
		$numMois =substr( $leMois,4,2);
		$lesMois=$pdo->getLesMoisDisponibles($ida);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($ida,$leMois);
		var_dump($lesInfosFicheFrais);
		$libEtat = var_export($lesInfosFicheFrais['libEtat']);
		$montantValide = var_export($lesInfosFicheFrais['montantValide']);
		$nbJustificatifs = var_export($lesInfosFicheFrais['nbJustificatifs']);
		$dateModif =  var_export($lesInfosFicheFrais['dateModif']);
		$dateModif =  dateAnglaisVersFrancais($dateModif);
		include("vues/v_etatFrais2.php");
	}
}
?>