<?php var_dump($_GET);?>
<?php include 'Template/header.php';?>
<?php $articles = [
    "Vivamus vitae pretium nisl. Sed accumsan nec quam eu viverra. Duis erat lacus, egestas ut neque id, pretium iaculis ex. Maecenas lobortis gravida est, ut convallis felis pellentesque accumsan. Suspendisse potenti. Etiam condimentum ac est ut tincidunt. Nunc tincidunt nisl id risus pretium, nec bibendum erat dignissim. Ut ornare nulla sed risus sodales, bibendum iaculis felis mattis. Quisque ac orci et velit dictum tempor pellentesque et ex. Fusce est neque, molestie ac metus id, vehicula feugiat nibh. Fusce sit amet interdum tortor. Praesent tempus risus viverra elit placerat molestie. Nullam sapien augue, dignissim id mi a, condimentum bibendum nibh.",
    "In laoreet pharetra dapibus. In euismod sit amet enim ut rutrum. Nulla fermentum, ligula sit amet auctor porttitor, neque ante maximus est, ullamcorper cursus libero nisi eu libero. Ut feugiat felis nec viverra ultrices. Aenean turpis urna, viverra id nibh quis, pellentesque feugiat risus. Sed a lectus non nulla euismod luctus. In eget justo vitae magna venenatis euismod. Aenean sodales venenatis vehicula.",
    "Aenean dictum gravida tellus maximus porttitor. Aliquam accumsan, leo id lacinia porttitor, elit eros semper dui, ut faucibus odio mi sed nisl. Etiam ac pharetra magna. In ultricies est vitae eros rhoncus congue. Etiam et odio sit amet sem condimentum dignissim vitae eu tortor. Praesent pharetra mi neque, in efficitur nulla laoreet ac. Nunc facilisis ligula sit amet porttitor congue."
];  ?>
<?php
    if(isset($_GET['article']) && isset($articles[$_GET['article']])){
        echo "<p>" . $articles[$_GET['article']] . "</p>";
    }
?>
<?php include 'Template/footer.php';?>
