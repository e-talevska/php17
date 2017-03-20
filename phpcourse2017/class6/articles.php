
<?php var_dump($_GET); ?>

<?php include 'templates/header.php'?>
        <?php $articles = [
        "Lorem Ipsum is simply",
        "Lorem Ipsum is simply dummy text of the printing and typesetting industry",
        "Lorem Ipsum is simply dummy text of the"           
        ];
        ?>
<?php
    if(isset($_GET['article']) && isset($articles[$_GET['article']])){
        echo "<p>".$articles[$_GET['article']]."</p>";
    }
?>
<?php include 'templates/footer.php'?>

