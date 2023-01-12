<?php
include 'init.php';
include $tpl . 'header.php';
include 'includes/languages/english.php';

//  Check If User Coming From HTTP Post Request

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username = $_POST['user'];
    $password = $_POST['pass'];
    $hashedPass = sha1($password);
   
    //Check if User Exist In Database

    //$stmt = $con->prepare("SELECT Username, Passwoed FROM users WHERE Username = ? AND Passwoed = ?");
    //$stmt->execute(array($username ,$hashedPass));
    //$count = $stmt->rowCount();

   // echo $count;



    


}

?>

<form class="login" action="<?php echo $_SERVER ['PHP_SELF']?>" method="POST">

    <h4 class="text-center">Admin Login</h4>
    <input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off">
    <input class="form-control" type="password" name="pass" placeholder="Password" autocomplete="new-password">
    <input class="btn btn-primary" type="submit" value="Login" />
</form>










<?php
include $tpl . 'footer.php';
?>