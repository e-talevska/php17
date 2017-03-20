<?php
require 'functions.php';

?>
<?php include 'template/header.php'; ?>

        <h1>HELLO <?php echo getName(); ?></h1>
        <ul>
            <li><a href="articles.php?article=0">artikal 1</a></li>
            <li><a href="articles.php?article=1">artikal 2</a></li>
            <li><a href="articles.php?article=2">artikal 3</a></li>
        </ul>
<?php include 'template/footer.php'; ?>