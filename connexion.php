<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="assets/main.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>CONNEXION</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Nom</label>
     	<input type="text" name="uname" placeholder="Nom d'utilisateur"><br>

     	<label>Mot de passe</label>
     	<input type="password" name="password" placeholder="Votre mot de passe"><br>

     	<button type="submit">Connecter</button>
     </form>
</body>
</html>