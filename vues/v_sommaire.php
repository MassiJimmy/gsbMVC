<!-- Division pour le sommaire -->
<div id="menuGauche">
   <div id="infosUtil">
   </div>  
   <div class="sommaire">
		<h1>VISITEUR</h1>
   </div>
   <div class="identifiant">
		<?php echo "<h1>".$_SESSION['prenom']."  ".$_SESSION['nom']." </h1>" ?>
   </div>
   <div class="boutonFrais">
      <div class="boutonAffichage"><a href="index.php?uc=gererFrais&action=saisirFrais">Saisie fiche de frais</a></div>
      <div class="boutonAffichage"><a href="index.php?uc=etatFrais&action=selectionnerMois">Mes fiches de frais</a></div>
   </div>
   <div class="deconnexion">
      <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a> 
   </div>
   </div>
    