<?php include 'header.php'; ?>
	<form method="POST">
		<label>Kilometri</label><br><input  type="text" name="kilometri"><br>
		<label>Potrosuvacka na 100km</label><br><input  type="text" name="potrosuvacka"><br>
		<label>Cena na gorivo</label><br><input  type="text" name="cena"><br>
		<button type="POST">Submit</button><input type="reset"><br>
	</form>
	<p>
		<?php 
		require_once 'check.php';
		check($_POST);
		?>

	</p>
<?php include 'footer.php'; ?>