<!doctype html>
<html lang="en">
  <head>
  	<title>Table 02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Liste des Biens Immobiliers</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table shadow-lg">
						  <thead class="thead-dark">
						    <tr>
						      <th>ID no.</th>
						      <th>Bien</th>
						      <th>Service</th>
						      <th>Chambres</th>
						      <th>Autres</th>
						      <th>Adresse</th>
						      <th>Prix</th>
						      <th>Etat</th>
						    </tr>
						  </thead>

						  <tbody>
<?php 
			 try {
			    $pdo = new PDO('mysql:host=127.0.0.1;dbname=ykamis', 'root', '');
			  } catch (Exception $e) {
			    die('Erreur: '.$e->getMessage());
			  }
			  $sql = 'SELECT * FROM bien_immobilier';
			  $req = $pdo->prepare($sql);
			  $req->execute();
			  $resultat = $req->fetchAll();
			  $count = 0;
			  foreach ($resultat as $row) {
			  	// code...
		  		$bien = $row['Type']; 
				$service = $row['Service'];
				$chambre = $row['Pieces'];
				$autre = $row['Autres'];
				$adresse = $row['Adresse'];
				$prix = $row['Prix'];
				$etat = $row['Etat'];
				$count++;
				?>						  	
						    <tr class="alert" role="alert">
						      <th scope="row"><?php echo $count;?></th>
						      <td><?php echo $bien;?></td>
						      <td><?php echo $service;?></td>
						      <td><?php echo $chambre;?></td>
						      <td><?php echo $autre;?></td>
						      <td><?php echo $adresse;?></td>
						      <td><?php echo $prix;?></td>
						      <td><?php echo $etat;?></td>
						    <!--   <td>
						      	<a href="#" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</a>
				        	</td> -->
						    </tr>
<?php }
?>
						   
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

