<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'click':
	{
			include("vues/v_coucou.php");
			break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		$visiteur = $pdo->getInfosVisiteur($login,$mdp);
		if(!is_array( $visiteur)){
			ajouterErreur('<p class="erreur">Login ou mot de passe incorrect</p>');
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		}
	
		else{
			$id = $visiteur['id'];
			$nom =  $visiteur['nom'];
			$prenom = $visiteur['prenom'];
			$Role = $visiteur['Role'];
			connecter($id,$nom,$prenom);
			if($Role == "Comptable")
			{
				include("vues/v_sommaire_comptable.php");
			}
			if($Role != "Comptable")
			{
				include("vues/v_sommaire.php");
			}
			
		}
		break;
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>