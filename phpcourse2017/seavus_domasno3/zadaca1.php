<table style="border: 1px solid #000;" cellpadding="0" cellspacing="0">

<?php
	
	for ($i = 0; $i < 9; $i++) {
		echo "<tr>";
		for ($j = 0; $j < 9; $j++) {
			if($i%2 == 0) {
				if($j%2 == 0) {
				 ?> <td height="30px" width="30px" bgcolor="#FFFFFF"></td> <?php
				} else {
				 ?> <td height="30px" width="30px" bgcolor="#000000"></td> <?php
				}
			} else {
				if($j%2 != 0) {
				 ?> <td height="30px" width="30px" bgcolor="#FFFFFF"></td> <?php
				} else {
				 ?> <td height="30px" width="30px" bgcolor="#000000"></td> <?php
				}
			}
		}
		echo "</tr>";
	}
	
?>

</table>