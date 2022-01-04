<?php

  try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=ykamis', 'root', '');
  } catch (Exception $e) {
    die('Erreur: '.$e->getMessage());
  }
if (isset($_POST['enregistrer'])) {
  // code...

$biens = $_POST['biens'];
$service = $_POST['service'];
$chambre = $_POST['chambre'];
$autre = $_POST['autre'];
$adresse = $_POST['adresse'];
$lot = $_POST['lot']; 
$prix = $_POST['prix'];
$etat = $_POST['etat'];

  $insert = $pdo->prepare('INSERT INTO `bien_immobilier`(`Type`, `Service`, `Pieces`,`Autres`, `Adresse`, `NumeroLot`, `Prix`, `Etat`, `Date`) VALUES(:biens, :service, :chambre, :autre, :adresse, :lot, :prix, :etat, NOW())');
  $insert->bindParam(':biens', $biens);
  $insert->bindParam(':service', $service);
  $insert->bindParam(':chambre', $chambre);
  $insert->bindParam(':autre', $autre);
  $insert->bindParam(':adresse', $adresse);
  $insert->bindParam(':lot', $lot);
  $insert->bindParam(':prix', $prix);
  $insert->bindParam(':etat', $etat);
  $result = $insert->execute();
 // var_dump($biens, $service, $chambre, $autre, $adresse, $lot, $prix, $etat);
  if ($result) { 
    # code...
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  Les informations immobilières sont enregistrées avec <strong>succès!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
header('Refresh:5; url=../index.php');
  }
  else {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Desole!</strong> Les informations ne sont pas correctes.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    header('Refresh:5; url=formulaire_bien.php');
  }
}      


?>       
<!DOCTYPE HTML>
<!--
  Astral by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Astral by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap-5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="mdbootstrap/css/bootstrap.min.css">
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

  </head>
  <body>
    <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
      <script type="text/javascript" src="bootstrap-5/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="mdbootstrap/js/bootstrap.min.js"></script>
  </body>
</html>