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

	<title>Blog Post - Start Bootstrap Template</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/blog-home.css" rel="stylesheet">
	<link href="css/jquery.bracket.min.css" rel="stylesheet">
	<link href="css/jquery.group.min.css" rel="stylesheet">

	<!-- Javasript Files -->
	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="js/lodash.js"></script>
	<script src="js/bacon.js"></script>
	<script src="js/handlebars-v4.0.11.js"></script>
	<script src="js/jquery.group.min.js"></script>
	<script src="js/jquery.bracket.min.js"></script>

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
								<li><a href="tournois1.php"><img alt="" src="images/tournois/summit8s.png" width="30" height="20"> Summit 8<span class="sr-only">(current)</span></a></li><br/>
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

	<!-- Page Content -->
	<div class="container "style="padding-bottom:50px">
			<!-- Post Content Column -->
			<div class="col-lg-11">

				<!-- Title -->
				<h1 class="mt-4">Le Summit 8</h1>

				
				<hr>

				<!-- Preview Image -->
				<<img class="card-img-top" src="images/tournois/summit8.png" width="750" height="300" alt="Card image cap">

				<hr>
				
				<div class="card my-4 width:900px">
				<hr>
				<h1 class="mt-4">Stage de Groupe</h1>
				<hr>
					<div id="group1">
						<script>
							var groupData = {
								teams: [{
										id: 10,
										name: "YoDa",
										faction: "t"
									},
									{
										id: 11,
										name: "First",
										faction: "p"
									},
									{
										id: 12,
										name: "MC",
										faction: "p"
									},
									{
										id: 13,
										name: "Ret",
										faction: "z"
									},
									{
										id: 14,
										name: "Kas",
										faction: "t"
									},
									{
										id: 15,
										name: "XIorD",
										faction: "z"
									}
								],
								matches: [{
										"id": 0,
										"round": 1,
										"a": {
											"team": 0,
											"score": 1
										},
										"b": {
											"team": 1,
											"score": 2
										}
									},
									{
										"id": 1,
										"round": 1,
										"a": {
											"team": 0,
											"score": 2
										},
										"b": {
											"team": 2,
											"score": 1
										}
									},
									{
										"id": 2,
										"round": 1,
										"a": {
											"team": 1,
											"score": 2
										},
										"b": {
											"team": 2,
											"score": 1
										}
									},
									{
										"id": 3,
										"round": 2,
										"a": {
											"team": 0,
											"score": 2
										},
										"b": {
											"team": 3,
											"score": 0
										}
									},
									{
										"id": 4,
										"round": 2,
										"a": {
											"team": 1,
											"score": 0
										},
										"b": {
											"team": 3,
											"score": 2
										}
									},
									{
										"id": 5,
										"round": 2,
										"a": {
											"team": 2,
											"score": 0
										},
										"b": {
											"team": 3,
											"score": 2
										}
									},
									{
										"id": 6,
										"round": 3,
										"a": {
											"team": 0,
											"score": 2
										},
										"b": {
											"team": 4,
											"score": 1
										}
									},
									{
										"id": 7,
										"round": 3,
										"a": {
											"team": 1,
											"score": 2
										},
										"b": {
											"team": 4,
											"score": 0
										}
									},
									{
										"id": 8,
										"round": 3,
										"a": {
											"team": 2,
											"score": 2
										},
										"b": {
											"team": 4,
											"score": 0
										}
									},
									{
										"id": 9,
										"round": 4,
										"a": {
											"team": 3,
											"score": 2
										},
										"b": {
											"team": 4,
											"score": 1
										}
									},
									{
										"id": 10,
										"round": 4,
										"a": {
											"team": 0,
											"score": 2
										},
										"b": {
											"team": 5,
											"score": 0
										}
									},
									{
										"id": 11,
										"round": 4,
										"a": {
											"team": 1,
											"score": 2
										},
										"b": {
											"team": 5,
											"score": 1
										}
									},
									{
										"id": 12,
										"round": 5,
										"a": {
											"team": 2,
											"score": 2
										},
										"b": {
											"team": 5,
											"score": 1
										}
									},
									{
										"id": 13,
										"round": 5,
										"a": {
											"team": 3,
											"score": 2
										},
										"b": {
											"team": 5,
											"score": 0
										}
									},
									{
										"id": 14,
										"round": 5,
										"a": {
											"team": 4,
											"score": 2
										},
										"b": {
											"team": 5,
											"score": 1
										}
									}
								]
							}

							function faction(faction) {
								colors = {
									't': "blue",
									'z': "purple",
									'p': "goldenrod"
								}
								return '<span style="padding: 2px; color: white;' +
									'display: inline-block; text-align: center;' +
									'font-size: 10px; width: 12px; margin: 0 3px;' +
									'background-color: ' + colors[faction] + '">' + faction + '</span>'
							}

							function customLabeler(team) {
								return faction(team.faction) + ' ' + team.name
							}

							$(function () {
								$('#group1, demo2').group({
									init: groupData,
									labeler: customLabeler
								})
							})
						</script>
						<div class="demo2"></div>
					</div>
				<hr>
				<h1 class="mt-4">Tournois</h1>
				<hr>
					<div id="tournament">
						<script type="text/javascript">
							var doubleEliminationData = {
								teams: [
									["Team 1", "Team 2"],
									["Team 3", "Team 4"],
									["Team 5", "Team 6"],
									["Team 7", "Team 8"],
									["Team 9", "Team 10"],
									["Team 11", "Team 12"],
									["Team 13", "Team 14"],
									["Team 15", "Team 16"]
								],
								results: [
									[ /* WINNER BRACKET */
										[
											[3, 5],
											[2, 4],
											[6, 3],
											[2, 3],
											[1, 5],
											[5, 3],
											[7, 2],
											[1, 2]
										],
										[
											[1, 2],
											[3, 4],
											[5, 6],
											[7, 8]
										],
										[
											[9, 1],
											[8, 2]
										],
										[
											[1, 3]
										]
									],
									[ /* LOSER BRACKET */
										[
											[5, 1],
											[1, 2],
											[3, 2],
											[6, 9]
										],
										[
											[8, 2],
											[1, 2],
											[6, 2],
											[1, 3]
										],
										[
											[1, 2],
											[3, 1]
										],
										[
											[3, 0],
											[1, 9]
										],
										[
											[3, 2]
										],
										[
											[4, 2]
										]
									],
									[ /* FINALS */
										[
											[3, 8],
											[1, 2]
										],
										[
											[2, 1]
										]
									]
								]
							}

							$(function () {
								$('div#tournament .demo').bracket({
									skipSecondaryFinal: true,
									skipConsolationRound: true,
									init: doubleEliminationData
								})
							})
						</script>

						<div class="demo"></div>
					</div>
				</div>
				<hr>
			
		<!-- /.row -->

	</div>
	<!-- /.container -->

	

</body>
<!-- Footer -->
	<footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
		</div>
		<!-- /.container -->
	</footer>

	<!-- Bootstrap core JavaScript -->
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</html>