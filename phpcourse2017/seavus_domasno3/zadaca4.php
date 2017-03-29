<?php require_once 'zadaca3.php'; ?>
<form action="zadaca4.php" method="POST">
  Kilometri:<br>
  <input type="text" name="kilometri" value="">
  <br>
  Litri na 100 km:<br>
  <input type="text" name="litri" value="">
  <br>
  Cena:<br>
  <input type="text" name="cena" value="">
  <br><br>
  <input type="submit" value="Presmetaj">
</form> 

<?php 
	if(isset($_POST['kilometri']) && isset($_POST['litri']) && isset($_POST['cena'])) {
		$km = (int)$_POST['kilometri'];
		$l = (int)$_POST['litri'];
		$c = (int)$_POST['cena'];
		echo tripCost ($km, $l, $c);
	}

?>