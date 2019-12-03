<form action="" method="POST">
	<input type="text" name="nom"><br><br>
	<input type="text" name="prenom"><br><br>
	<input type="submit" value="Ajouter">
</form>
<?php
$nom= $_POST['nom'];
$prenom= $_POST['prenom'];

echo $nom ,$prenom;
  ?>