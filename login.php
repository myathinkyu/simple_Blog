<?php

include_once "views/top.php";


if(isset($_POST['submit'])){
    $email = $_POST["email"];
    $password = $_POST ["password"];

    $ret = loginUser($email,$password);
    $message = "";
    switch($ret){
        case "Login Success":
            $message = "Login Success";
            if(getSession("username") === "myathinkyu" && getSession("email") === "myathinkyu@gmail.com"){
                header("Location: admin.php"); 
            }else{
                header("Location: index.php");
            }
            break;
        case "Login Fail":
            $message = "Login Fail";break;
        case "Auth Fail":
            $message = "username and password not in format";break;
            default:
    }
    echo "<div class='container my-5'> <div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
    </button>
    " . $message . "
    </div></div>";
}

?>

<div class="container my-2">
    <div class="col-md-8 offset-md-2 table-bordered p-5 ">
        <h5 class="text-danger english text-center mb-3">Login to See Special Post!</h5>
        <form action="login.php" class="form" method="post">
            <div class="form-group">
                <label for="email" class=""english>Email</label>
                <input type="email" class="form-control english" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="passwqord" class=""english>Password</label>
                <input type="password" class="form-control english" name="password" id="password">
            </div>
            <div class="row no-gutters justify-content-end">
                <button class="btn btn-info float-right" type="submit" name="submit" value="submit">Login</button>
            </div>
        </form>
    </div>
</div>

<?php 
include_once "views/footer.php";
include_once "views/base.php";
?>

</body>
</html>