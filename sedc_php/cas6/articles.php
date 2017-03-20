<?php include 'templates/header.php'; ?>
<?php $articles = [
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sollicitudin id enim vitae consequat. Sed sollicitudin, lectus in bibendum luctus, libero erat placerat leo, aliquet eleifend diam mi dignissim lorem. Ut facilisis nibh non ligula dignissim tincidunt. Sed egestas nunc et ipsum blandit, id iaculis dui commodo. Proin et congue est. Morbi vestibulum urna sit amet purus mollis cursus. Aliquam id dolor congue, tempor leo vel, scelerisque tellus. Donec tortor enim, maximus quis condimentum sit amet, auctor a ex. Suspendisse vulputate massa sit amet ante dapibus, fringilla dapibus tellus luctus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt nibh quam, a bibendum erat lacinia a. In ornare dolor dolor. Quisque sit amet ligula sodales erat placerat laoreet. Nulla viverra justo ut libero posuere ornare. Aenean tincidunt nisi non lacinia tristique. Vivamus sollicitudin mollis lacinia.",
    "Sed non blandit turpis. Etiam dictum neque quis ornare cursus. Duis ut mauris ante. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce suscipit lacinia venenatis. Maecenas enim justo, tristique sed rhoncus ac, elementum sit amet nisi. Praesent tortor ipsum, lacinia ac neque in, lobortis interdum leo. Sed ut metus scelerisque, sollicitudin libero ac, faucibus dolor. Nunc lobortis ex tellus, eget aliquet elit tristique non. Morbi sed sapien nec urna volutpat fringilla. Vivamus rutrum velit non velit ultricies, nec mollis metus faucibus.",
    "Phasellus eu ligula fermentum, suscipit ligula eu, bibendum sem. Quisque a rhoncus orci, vel pharetra massa. Suspendisse potenti. In suscipit volutpat enim eget convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean congue ac metus a finibus. Nulla facilisi."
]; ?>

<?php
    if (isset($_GET['article']) && isset($articles[$_GET['article']])) {
        echo "<p>".$articles[$_GET['article']]."</p>";
    }
?>
<?php include 'templates/footer.php'; ?>