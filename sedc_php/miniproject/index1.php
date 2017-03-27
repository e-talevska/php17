<?php
include "header";

//meni
?>
<a href="index1.php?p=about">About</a>
<a href="index1.php?p=contact">Contact</a>
<?php
if(isset($_GET['p'])) {
    include $_GET['p'].".php";
}
include "footer";