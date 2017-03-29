<a href ="index.php?page=about">About</a>

<?php
if (isset ($_GET['page'])){//about namesto page 
    if($_GET['page'] == 'about'){
    include $_GET['page'].".php";//about.php vo include
    }
}
?>
