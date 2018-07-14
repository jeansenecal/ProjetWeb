<!DOCTYPE html>
<html lang="en">
<?php

    session_start();
  
?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dota Tournaments</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript"></script>

</head>


<body>

  <!-- Navigation -->
		<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
			<a class="navbar-brand" href="#">Dota</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarColor01">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Acceuil </a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download" aria-expanded="false">Materia </a>
						<div class="dropdown-menu ">
							<ul class="multi-column-dropdown">
								<li class="dropdown-header">Upcoming</li>
								<li><a href="tournois1.php"><img alt="" src="images/tournois/summit8s.png" width="30" height="20"> Summit 8</a></li><br/>
								<li><a href="tournois2.php"><img alt="" src="images/tournois/mdlmacau.jpg" width="30" height="20"> MDL Macau</a></li><br/>
								<li><a href="tournois3.php"><img alt="" src="images/tournois/DHDLS8.png" width="30" height="20"> DreamLeague 8</a></li><br/>										
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="classements.php">Classements</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					
					<?php
					   if(isset($_SESSION['util'])) {
					  ?>
						<a href="DataLayer/BusinessLayer/deconnection.php" class="btn btn-danger">Déconnexion</a>
					  <?php
						}
						else {
						  ?>
					   <a href="login.php" class="btn btn-danger">Connexion</a>
					  <?php
						}
					  ?>
					
				</form>
			</div>
		</nav>
  <div class="container" style="padding-bottom:50px">
    <div class="col-md-6">
    
      <hr class="divider">
      <h2 class="text-center text-lg text-uppercase my-0">
        <strong>Compte Créé! Merci!</strong>
      </h2>
      
  </div>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
  </footer>
</body>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>
