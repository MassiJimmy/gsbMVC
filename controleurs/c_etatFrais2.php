<?php
$id = $_POST['nom'];
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
		include("vues/v_listeMoisDeux.php");
		break;
	}
	case 'voirEtatFrais2':{
		$leMois = $_REQUEST['lstMois2']; 
		$lesMois=$pdo->getLesMoisDisponibles($id);
		$moisASelectionner = $leMois;
		include("vues/v_listeMoisDeux.php");
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($vivi,$leMois);
		$lesFraisForfait= $pdo->getLesFraisForfait($vivi,$leMois);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($vivi,$leMois);
		$numAnnee =substr( $leMois,0,4);
		$numMois =substr( $leMois,4,2);
		$libEtat = $lesInfosFicheFrais['libEtat'];
		$montantValide = $lesInfosFicheFrais['montantValide'];
		$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		$dateModif =  $lesInfosFicheFrais['dateModif'];
		$dateModif =  dateAnglaisVersFrancais($dateModif);
		include("vues/v_etatFrais2.php");
	}
}
?>