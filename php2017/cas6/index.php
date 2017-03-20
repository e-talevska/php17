<?php
require 'functions.php';

?>
<?php include 'Template/header.php';?>
        <h1>Hello <?php echo getName()?></h1>
        <ul>
            <li><a href="articles.php?article=0">Article 1</a></li>
            <li><a href="articles.php?article=1">Article 2</a></li>
            <li><a href="articles.php?article=2">Article 3</a></li>

        </ul>

<?php include 'Template/footer.php';?>
