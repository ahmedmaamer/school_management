<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifierGroupe</title>
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core JS-JQUERY -->
<script src="./assets/dist/js/jquery.min.js"></script>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="./assets/jumbotron.css" rel="stylesheet">
    <link href="./assets/new.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
   </head>

<body onLoad="document.fo.login.focus()">
    
  <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark new_nav">
  <a class="navbar-brand" href="index.php"><img class ="new_logo"src="../assets/enicar.jpg" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="index.php" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Gestion des Groupes</a>        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="AfficherEtudiants.php">Lister tous les ??tudiants</a>
          <a class="dropdown-item" href="afficheretudiantsparclasse.php">Etudiants par Groupe</a>
          <a class="dropdown-item" href="ajouterGroupe.php">Ajouter Groupe</a>
          <a class="dropdown-item" href="modifiergroupe.php">Modifier Groupe</a>
          <a class="dropdown-item" href="supprimerGroupe.php">Supprimer Groupe</a>

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Gestion des Etudiants</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="AjouterEtudiant.php">Ajouter Etudiant</a>
          <a class="dropdown-item" href="chercherEtudiant.php">Chercher Etudiant</a>
          <a class="dropdown-item" href="modifierEtudiant.php">Modifier Etudiant</a>
          <a class="dropdown-item" href="supprimerEtudiant.php">Supprimer Etudiant</a>


        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Gestion des Absences</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="saisirAbsence.php">Saisir Absence</a>
          <a class="dropdown-item" href="etatAbsence.php">??tat des absences pour un groupe</a>
        </div>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="deconnexion.php">Se D??connecter <span class="sr-only">(current)</span></a>
      </li>

    </ul>
  
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Saisir un groupe" aria-label="Chercher un groupe">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher Groupe</button>
    </form>
  </div>
</nav>
<main role="main">
<div class="jumbotron">
            <div class="container">
              <h1 class="display-4">Modifier un groupe</h1>
              <p>Remplir le formulaire ci-dessous afin de Modifier un groupe</p>
            </div>
          </div>
          <div class="container">
    
    <h2>Nom de groupe :  </h2>
    <form method="POST"  action="modifiergroupe.php">
    <input type="text" id="Nom" name="Nom" class="form-control"required pattern="INFO[1-3]{1}-[A-E]{1}"
     title="Pattern INFOX-X. Par Exemple: INFO1-A, INFO2-E, INFO3-C">
     <h2 >Nouveau nom de groupe :</h2>
    <input type="text" id="Nom1" name="Nom1" class="form-control" required pattern="INFO[1-3]{1}-[A-E]{1}"
     title="Pattern INFOX-X. Par Exemple: INFO1-A, INFO2-E, INFO3-C">
    <input type="submit" id="confirmation"  class="btn btn-primary btn-block" name="confirmation"></button>
    </form>
    
          </div>
    
</body>
<?php 

include "connexion2.php";
if (isset($_POST["confirmation"]))
{
    $Nom=$_POST['Nom'];
    $Nom1=$_POST['Nom1'];
    $req="UPDATE  `groupe` set Nom='$Nom1' WHERE Nom='$Nom'";
    $resultat=mysqli_query($conn,$req);
    if ($resultat){
        echo "modification du groupe reussite";
    }
    else{
        echo "un erreur est survenu";
    }
    
}

?>
</html>