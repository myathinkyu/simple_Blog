<?php 

include_once "views/top.php";


if(isset($_POST['submit'])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST ["password"];

    $ret = registerUser($username,$email,$password);

    $message = "";

    switch($ret){
        case "Register Success":
            $message = "Register Success";
            setSession("username",$username);
            setSession("email",$email);
            if($username === "myathinkyu" && $email === "myathinkyu@gmail.com"){
                header("Location: admin.php");
            }else{
                header("Location: index.php");
            }
            
            break;
        case "Email is already in use":
            $message = "Email is already in use";break;
        case "Register Fail":
            $message = "Register Fail";break;
        case "Fail":
            $message = "Authentication Fail";break;
        default :
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
        <h5 class="text-danger english text-center mb-3">Register to be Special Member!</h5>
        <form action="register.php" class="form" method="post">
            <div class="form-group">
                <label for="username" class=""english>Username</label>
                <input type="text" class="form-control english" name="username" id="username">
            </div>
            <div class="form-group">
                <label for="email" class=""english>Email</label>
                <input type="email" class="form-control english" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="passwqord" class=""english>Password</label>
                <input type="password" class="form-control english" name="password" id="password">
            </div>
            <div class="row no-gutters justify-content-end">
                <button class="btn btn-info float-right" type="submit" name="submit" value="submit">Register</button>
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

