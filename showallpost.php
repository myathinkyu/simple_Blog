<?php

include_once "views/top.php";
include_once "views/header.php";

if(checkSession("username")){
    if(getSession("username")  != "myathinkyu"){
        header("Location:index.php");
    }
}else{
    header("Location:index.php");
}

 if(isset($_POST['submit']) ){
    $posttitle = $_POST["posttitle"];
    $posttype = $_POST["posttype"];
    $postwriter = $_POST["postwriter"];
    $postcontent = $_POST["postcontent"];

    $imglink = mt_rand(time(),time()) ."_". $_FILES["file"]["name"] .mt_rand(time(),time());
    move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/'. $imglink);
    echo "Post Title is " . $posttitle ."<br>";
    echo "Post Type is " . $posttype ."<br>";
    echo "Post Writer is " . $postwriter ."<br>";
    echo "Post Content is " . $postcontent ."<br>";

    $bol = insertPost($posttitle,$posttype,$postwriter,$postcontent,$imglink,$subject);
    if($bol){
    echo "<div class='container my-5'> <div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    Post Successfully Inserted 
    </div></div>";
    }else{
        echo "<div class='container my-5'> <div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        Post Successfully Fail
        </div></div>";   
    } 
}  


?>
<div class="container" my-3>
  <div class="row">
    <?php include_once "views/sidebar.php"; ?>
        <section class="col-md-9">
            <?php
                $result = getAllPost(2);
                foreach ($result as $post) {
                    echo '<div class="card mb-3">
                        <div class="card-block m-3">
                            <h5>'.$post["title"].'</h5>
                            <p> '.substr($post["content"],0,100).'</p>
                            <a href="postEdit.php?pid='.$post["id"].' "class="btn btn-info btn-sm float-right ">Edit</a>
                        </div></div>';
                }
            ?>
        </section>
    </div>
</div>




<?php 
include_once "views/footer.php";
include_once "views/base.php";
?>
