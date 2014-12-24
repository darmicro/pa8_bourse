<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Connexion</title>
		<meta name="description" content="description">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="css/style.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript">
			function sendForm(){
				var nomUser = document.getElementsByName("username")[0].value;
				var motDePasse = document.getElementsByName("password")[0].value;
				
				if (nomUser == null || nomUser == "") {
					alert("Tout les champs sont obligatoire");
					return false;
				}
 		}
		</script>
	</head>
	
<body>
<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="text-right">
				<a href="page_register.html" class="txt-default">Inscription</a>
			</div>
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header">Connexion</h3>
					</div>
					
					<form action="controler/connectme.php" method="POST">
						<div class="form-group">
							<label class="control-label">Nom</label>
							<input type="text" class="form-control" name="username" required />
						</div>
						<div class="form-group">
							<label class="control-label">Mot de passe</label>
							<input type="password" class="form-control" name="password" required />
						</div>
						<?php
						if($_GET["erreur"] == 1)
							echo '<div class="text-center">
								  <p>Erreur de connexion.<br>Vérifiez votre nom ou votre mot de passe.</p>
								  </div>';
						?>
						<div class="text-center">
							<input type="submit" value="Se connecter" class="btn btn-primary">
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>