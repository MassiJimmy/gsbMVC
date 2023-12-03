<?php include("vues/v_sommaire_comptable.php"); ?>
<h3>Liste des visiteur</h3>

<form action="" method="POST">   
</form>
<div class="nutile">
    <label for="nom">Nom des Visiteur</label>
</div>
<form action="index.php?uc=etatFrais2&action=selectionnerMoisDeux" method="POST">
    <select name="nom"  id="ficheUtil">
  <?php
  $noms=$pdo->getnom();
  foreach($noms as $nom)
  {
      echo '<option value="'. $nom["id"] .'">'. $nom["nom"] .' '. $nom["prenom"] .'</option>';
  }
  ?>
    </select>
<div class="val">  
    <input type="submit" value="valider">
</div>
</form>
