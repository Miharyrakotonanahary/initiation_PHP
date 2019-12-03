<form action="" method="POST">
	<input type="text" name="chiffre1"><br><br>
	<input type="text" name="chiffre2"><br><br>
	<input type="submit" value="Calculer">
</form>
<?php
$chiffre1= $_POST['chiffre1'];
$chiffre2= $_POST['chiffre2'];

$resultat= $chiffre1 + $chiffre2;
echo $resultat;
  ?>