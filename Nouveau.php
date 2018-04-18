<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Nouveaux jeux</title>
</head>
<body>
	<form method="post" action="traitement.php">
		<input type="text" name="Nom" placeholder="Nom du jeu" />
		<input type="text" name="Nom" placeholder="DLC" />
		<input type="text" name="Editeur" placeholder="Nom de l'éditeur">
		<p>Date de publication : <input type="date" /></p>
		<p>Cochez les différentes plateformes pour chaques jeux :</p>
		<input type="checkbox" name="plateformes" value="PC" id="PC" /> <label for="PC">PC</label><br>
		<input type="checkbox" name="plateformes" value="Xbox One" id="Xbox One" /> <label for="Xbox One">Xbox One</label><br>
		<input type="checkbox" name="plateformes" value="Xbox 360" id="Xbox 360" /> <label for="Xbox 360">Xbox 360</label><br>
		<input type="checkbox" name="plateformes" value="Ps4" id="Ps4" /> <label for="Ps4" >Ps4</label><br>
		<input type="checkbox" name="plateformes" value="Ps3" id="Ps3" /> <label for="Ps3">Ps3</label><br>
		<br>
		<p>Support physique(CD) &amp/ou dématérialisé (téléchargement):</p>
		<input type="checkbox" name="support" value="CD" id="CD" /> <label for="CD">CD</label>
		<input type="checkbox" name="support" value="dématérialisé" id="dématérialisé" /> <label for="dématérialisé">Dématérialisé</label><br>
		<br>
		<input type="submit" value="Envoyer" />
	</form>
<?php
// Connection a la base de donnée
try
{
$bdd = new PDO('mysql:host=localhost;dbname=jeux_videos;charset=utf8', 'root', '');
}
catch(Exception $e)
{
       die('Erreur : '.$e->getMessage());
}
?>
</body>
</html>