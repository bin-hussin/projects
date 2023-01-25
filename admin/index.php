<?php
session_start();
$noNavbar = '';
if(isset($_SESSION['Username'])){
    header('Location: dashboard.php');
}
include 'init.php';


//  Check If User Coming From HTTP Post Request

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['user'];
    $password = $_POST['pass'];
    $hashedPass = sha1($password);

    //Check if User Exist In Database

    $stmt = $con->prepare("SELECT username, password FROM users WHERE username =? and password =? And groupid = 1");
    $stmt->execute(array($username, $hashedPass));
    $count = $stmt->rowCount();


    //If Count > 0 This Mean The Database Contain Record About This Username 

    if ($count > 0) {
      //  echo 'Welcome ' . $username;
      
        $_SESSION['Username'] = $username;
        header('Location: dashboard.php');

    }
}



?>

<form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

    <h4 class="text-center">Admin Login</h4>
    <input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off">
    <input class="form-control" type="password" name="pass" placeholder="Password" autocomplete="new-password">
    <input class="btn btn-primary" type="submit" value="Login" />
</form>










<?php
include $tpl . 'footer.php';
?>