<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="./styles/styles.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
  </head>
  <body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="images/logo1.jpg" alt="logo" style="width:60px;">
  </a>
    <?php      
      if (estVisiteurConnecte() ) {
          $idUser = obtenirIdUserConnecte() ;
          $lgUser = obtenirDetailVisiteur($idConnexion, $idUser);
          $nom = $lgUser['nom'];
          $prenom = $lgUser['prenom'];
          $role = $lgUser['role'];        
    ?>
  
      </div>  
<?php      
  if (estVisiteurConnecte() ) {
    if ($role == 1){
?>

       <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="cAccueil.php">Accueil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="cSeDeconnecter.php">Se déconnecter</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="cSaisieFicheFrais.php">Saisie fiche de frais</a>
    </li>
       <li class="nav-item">
      <a class="nav-link" href="cConsultFichesFrais.php">Mes fiches de frais</a>
    </li>
   
  </ul>
         <?php }
         else { ?>
            <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="cAccueil.php">Accueil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="cSeDeconnecter.php">Se déconnecter</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="cSaisieFicheFrais.php">Validation des fiches de frais</a>
    </li>
       <li class="nav-item">
      <a class="nav-link" href="cConsultFichesFrais.php">Suivi de paiement fiches de frais</a>
    </li>


            <h3>
    <?php  
            echo $nom . " " . $prenom . " - "; if ($role == 2){echo "Comptable";} else{echo "Visiteur";};
    ?>
        </h3>
      
    <?php
       }
    ?>


  </ul>
</nav>
         <?php } ?>
        <?php
          // affichage des éventuelles erreurs déjà détectées
          if ( nbErreurs($tabErreurs) > 0 ) {
              echo toStringErreurs($tabErreurs) ;
          }
  }
        ?>
    </div>
      </div>
    <div id="page">

