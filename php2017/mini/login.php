<?php session_start();

if(!isset($_SESSION['username']) && isset($_COOKIE['username'])){
    $_SESSION['username'] = $_COOKIE['username'];
   
}

if(isset($_SESSION['username'])){
    header("Location: profile.php");
    exit;
}
//
//if(isset($_COOKIE['username'])){
//    header('Location: profile.php');
//    exit;
//}

$username=$pass="";
$errors=[];
$rememberme=false;
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $pass=$_POST['password'];
    $rememberme =  isset($_POST['rememberme']) ? true : false;
    
    if (strlen(trim($username))==0){
        $errors['username']='username is required';
    }
    if(strlen(trim($pass))==0){
        $errors['password']='password is required';
    }
    if (empty($errors)) {
        include 'db.php';
        foreach ($users as $u => $p) {
            if ($u == $username && $p == $pass){
                $_SESSION['username']=$username;
                if($rememberme){
                setcookie("username", $username, time()+3600); //set cookie valid one hour
                }
                header("Location: profile.php"); // redirect to profile page
                exit;
            }
        }
        $errors['pass']='the combination does not have match';
    }
}

?>
<?php include 'template/header.php'; ?>
<div class="container" style="padding-top:35px;">
    <div class="col-md-8 col-md-offset-2">
        <form action="" method="POST">
            <label for="username" >user:</label>
            <input value="<?= $username; ?>"  id="username" name="username"><br>
            <p><?php echo (isset($errors['username']))? $errors['username']: ""; ?></p>
            <label for="password">password:</label>
            <input value="" type="password" id="password" name="password"><br>
            <label for="rememberme">keep me logedin: </label>
            <input <?php if($rememberme){echo "checked=''";} ?> value="" type="checkbox" name="rememberme" id="rememberme">
            <p><?php echo (isset($errors['password']))? $errors['password']: ""; ?></p>
             <p><?php echo (isset($errors['pass']))? $errors['pass']: ""; ?></p>
             <input type="submit">
        </form>
    </div>
</div>
<?php include 'template/footer.php'; ?>